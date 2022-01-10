<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSemeterRequest;
use App\Http\Requests\UpdateSemeterRequest;
use App\Models\Semeter;

class SemeterController extends Controller
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
     * @param  \App\Http\Requests\StoreSemeterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSemeterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Semeter  $semeter
     * @return \Illuminate\Http\Response
     */
    public function show(Semeter $semeter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Semeter  $semeter
     * @return \Illuminate\Http\Response
     */
    public function edit(Semeter $semeter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSemeterRequest  $request
     * @param  \App\Models\Semeter  $semeter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSemeterRequest $request, Semeter $semeter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Semeter  $semeter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semeter $semeter)
    {
        //
    }
}
