<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PatientController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $patients = User::where('type', 'Paciente')->get();

        return view('patients.index', compact('user', 'patients'));
    }

    public function edit($id)
    {

        $patient = User::find($id);

        return view('patients.edit', compact('patient'));
    }

    public function Update(Request $request, $id)
    {
        $patient = User::find($id);
        $patient->update([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'birth' => $request->birth,
            'password' => $request->password
        ]);
        return redirect('/patients/index');
    }

    public function destroy($id)

    {
        $patient = User::find($id);
        $patient->delete();
        return redirect('/patients/index');
    }
}