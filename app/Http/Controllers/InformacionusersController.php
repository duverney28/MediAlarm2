<?php

namespace App\Http\Controllers;

use App\Models\informacionusers;
use Illuminate\Http\Request;

class InformacionusersController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate(informacionusers::$rules);
        $profile= informacionusers::create($data);
        return response()->json($profile,200);

    }

    
    public function ShowAllProfile()
    {


        $data['users'] = informacionusers::where("id_user", Auth()->user()->id)->get();
        return view('layouts.app', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\informacionusers  $informacionusers
     * @return \Illuminate\Http\Response
     */
    public function show(informacionusers $informacionusers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\informacionusers  $informacionusers
     * @return \Illuminate\Http\Response
     */
    public function edit(informacionusers $informacionusers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\informacionusers  $informacionusers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, informacionusers $informacionusers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\informacionusers  $informacionusers
     * @return \Illuminate\Http\Response
     */
    public function destroy(informacionusers $informacionusers)
    {
        //
    }
}
