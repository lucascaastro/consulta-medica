<?php

namespace App\Http\Controllers;

use App\Models\MedSpecialist;
use App\Http\Requests\StoreMedSpecialistRequest;
use App\Http\Requests\UpdateMedSpecialistRequest;

class MedSpecialistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedSpecialistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedSpecialistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedSpecialist  $medSpecialist
     * @return \Illuminate\Http\Response
     */
    public function show(MedSpecialist $medSpecialist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedSpecialist  $medSpecialist
     * @return \Illuminate\Http\Response
     */
    public function edit(MedSpecialist $medSpecialist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedSpecialistRequest  $request
     * @param  \App\Models\MedSpecialist  $medSpecialist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedSpecialistRequest $request, MedSpecialist $medSpecialist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedSpecialist  $medSpecialist
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedSpecialist $medSpecialist)
    {
        //
    }
}
