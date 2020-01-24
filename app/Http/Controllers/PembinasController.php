<?php

namespace App\Http\Controllers;

use App\Pembina;
use Illuminate\Http\Request;

class PembinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('/pembina/dashboard');
    }
    public function penilaian()
    { 
        return view('/pembina/penilaian');
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
     * @param  \App\Pembina  $pembina
     * @return \Illuminate\Http\Response
     */
    public function show(Pembina $pembina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembina  $pembina
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembina $pembina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembina  $pembina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembina $pembina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembina  $pembina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembina $pembina)
    {
        //
    }
}
