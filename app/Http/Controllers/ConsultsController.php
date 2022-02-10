<?php

namespace App\Http\Controllers;

use App\Models\Consults;
use App\Http\Requests\StoreConsultsRequest;
use App\Http\Requests\UpdateConsultsRequest;

class ConsultsController extends Controller
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
     * @param  \App\Http\Requests\StoreConsultsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConsultsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consults  $consults
     * @return \Illuminate\Http\Response
     */
    public function show(Consults $consults)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consults  $consults
     * @return \Illuminate\Http\Response
     */
    public function edit(Consults $consults)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConsultsRequest  $request
     * @param  \App\Models\Consults  $consults
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConsultsRequest $request, Consults $consults)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consults  $consults
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consults $consults)
    {
        //
    }
}
