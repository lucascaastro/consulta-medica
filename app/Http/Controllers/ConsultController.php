<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Consult;
use App\Models\MedSpecialist;
use App\Models\DoctorsSpecialist;
use App\Http\Requests\StoreConsultRequest;
use App\Http\Requests\UpdateConsultRequest;

class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        if (auth()->user()->type == 'Operador') {
            $consults = Consult::orderBy('id', 'desc')->get();
            return view('/dashboard', compact('user', 'consults'));
        } elseif (auth()->user()->type == 'Paciente') {
            $consults = Consult::orderBy('id', 'desc')->where('patient_id', auth()->user()->id)->get();
            return view('/dashboard', compact('user', 'consults'));
        }
        $consults = Consult::orderBy('id', 'desc')->where('doctor_id', auth()->user()->id)->get();
        return view('/dashboard', compact('user', 'consults'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = auth()->user();

        $specialists = DoctorsSpecialist::join('specialists', 'specialists.id', 'doctors_specialists.specialist_id')
            ->where('specialists.id', '=', 'doctors_specialists.specialist_id')->get();

        $patients = User::where('type', 'Paciente')->get();
        $doctors = User::where('type', 'Médico')->get();

        return view('consults.create', compact('users', 'patients', 'doctors', 'specialists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConsultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConsultRequest $request)
    {
        $input = $request->all();

        $input["user_id"] = auth()->id();

        Consult::create($input);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function show(Consult $consult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function edit(Consult $consult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConsultRequest  $request
     * @param  \App\Models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConsultRequest $request, Consult $consult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consult = Consult::find($id);
        $consult->delete();
        return redirect('/dashboard');
    }
}