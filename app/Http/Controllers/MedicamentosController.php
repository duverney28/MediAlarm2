<?php

namespace App\Http\Controllers;

use App\Models\Medicamentos;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('medicamentos.index');
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
        $data = $request->validate(Medicamentos::$rules);
        $medicamentos = Medicamentos::create($data);
        return response()->json($medicamentos, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamentos $medicamentos)
    {
        $medicamentos= Medicamentos::all();
        return response()->json($medicamentos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $medicamentos= Medicamentos::find($id);
        $medicamentos->start = Carbon::createFromFormat('Y-m-d H:i:s',$medicamentos ->start)->format('Y-m-d');
        $medicamentos->end = Carbon::createFromFormat('Y-m-d H:i:s',$medicamentos ->end)->format('Y-m-d');
        return response()->json($medicamentos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicamentos $medicamentos)
    {
        //
        $request->validate(Medicamentos::$rules);
        $medicamentos -> update($request->all());
        return response()->json($medicamentos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $medicamentos= Medicamentos::find($id)->delete();

        return response()->json($medicamentos);

    }
}
