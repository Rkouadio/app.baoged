<?php

namespace App\Http\Controllers;

use App\Archives;
use Illuminate\Http\Request;

class ArchivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  addArch()
    {
        return view('archives.addArchives');
    }

    public function  showArch()
    {
        return view('archives.showArchives');
    }
    public function index()
   {
return view('archives.gestionArchives');
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
     * @param  \App\Archives  $archives
     * @return \Illuminate\Http\Response
     */
    public function show(Archives $archives)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Archives  $archives
     * @return \Illuminate\Http\Response
     */
    public function edit(Archives $archives)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Archives  $archives
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archives $archives)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archives  $archives
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archives $archives)
    {
        //
    }
}
