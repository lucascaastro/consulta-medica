<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Specialist;
use Illuminate\Http\Request;
use App\Models\MedSpecialist;
use App\Models\DoctorsSpecialist;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Mostra página de autenticação de usuário
     *
     * @return view
     */
    public function login()
    {
        return view('login');
    }
    public function specialist_doctor($id)
    {
        return DoctorsSpecialist::with('specialists')->where('doctor_id', $id)->get();
    }
    /**
     * Mostra página de registro de usuário
     *
     * @return view
     */
    public function register()
    {
        $specialists = Specialist::all();

        return view('register', compact('specialists'));
    }

    /**
     * Executa a autenticação do usuário
     *
     * @param Request $request
     *
     * @return redirect
     */
    public function signin(Request $request)
    {

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withError('Usuário ou senha incorretos');
    }

    /**
     * Executa o registro do usuário
     *
     * @param Request $request
     *
     * @return redirect
     */
    public function signup(Request $request)
    {
        DB::beginTransaction();
        try {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'cpf' => $request->cpf,
                'rg' => $request->rg,
                'birth' => $request->birth,
                'type' => $request->type,
                'password' => bcrypt($request->password)
            ]);
            if (is_array($request->specialty)) {
                foreach ($request->specialty as $specialty) {
                    DoctorsSpecialist::create([
                        'specialist_id' => $specialty,
                        'doctor_id' => $user->id
                    ]);
                }
            }
            DB::commit();

            Auth::login($user);

            return redirect()->route('dashboard');
        } catch (Exception $error) {
            DB::rollBack();
            Log::error($error);
            return redirect()
                ->route('register')
                ->withInput($request->all());
        }
    }

    /**
     * Executa o logout do usuário
     *
     * @param Request $request
     *
     * @return redirect
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}