<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Consult;
use App\Http\Requests\StoreConsultRequest;
use App\Http\Requests\UpdateConsultRequest;
use App\Models\MedSpecialist;

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
        $consults = Consult::orderBy('id', 'desc')->get();

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

        $patients = User::where('type', 'Paciente')->get();
        $doctors = User::where('type', 'Médico')->get();

        return view('consults.create', compact('users', 'patients', 'doctors'));
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
    public function destroy(Consult $consult)
    {
        //
    }
}