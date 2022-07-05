<?php

namespace App\Http\Controllers;

use App\Models\period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{

    public function createperiod()
    {
        return view('period.create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('period.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\period  $period
     * @return \Illuminate\Http\Response
     */
    public function show(period $period)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\period  $period
     * @return \Illuminate\Http\Response
     */
    public function edit(period $period)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\period  $period
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, period $period)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\period  $period
     * @return \Illuminate\Http\Response
     */
    public function destroy(period $period)
    {
        //
    }
}
