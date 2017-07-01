<?php

namespace App\Http\Controllers;

use App\Adventure;
use Illuminate\Http\Request;

class AdventureController extends Controller
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
        return view('adventure.create');
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
     * @param  \App\Adventure  $adventures
     * @return \Illuminate\Http\Response
     */
    public function show(Adventure $adventures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adventure  $adventures
     * @return \Illuminate\Http\Response
     */
    public function edit(Adventure $adventures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adventure  $adventures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adventure $adventures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adventure  $adventures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adventure $adventures)
    {
        //
    }
}
