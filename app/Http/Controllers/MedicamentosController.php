<?php

namespace App\Http\Controllers;

use App\Models\Medicamentos;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Faker\Provider\Medical;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

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

    public function showallMediById()
    {


        $data['medicamentos'] = Medicamentos::where("id_user", Auth()->user()->id)->get();
        return view('mis medicamentos.index', $data);
    }

    public function ShowMap(){

        return view('misfarmacias.index');
    }


    public function pdf()
    {

        $data = Medicamentos::paginate();
        $pdf = PDF::loadView('mis medicamentos.pdf', ['data' => $data]);
        return $pdf->stream('___agendaMedicamentos.pdf');
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


        $medicamentos = Medicamentos::all();
        return response()->json($medicamentos);
    }

    
    public function listByIdCalendar(){


        $medicamentos = Medicamentos::where("id_user", Auth()->user()->id)->get();
        return response()->json($medicamentos);
        
    }


    public function showmediById($id)
    {

        $medicamentos = Medicamentos::find($id);
        return response()->json($medicamentos);
    }

    public function listar()
    {

        $agenda = Medicamentos::all();
        $nueva_agenda = [];

        foreach ($agenda as $value) {
            $nueva_agenda[] = [
                "id" => $value->id,
                "id_user" => $value->id_user . "" . $value->id_user,
                "title" => $value->title . "" . $value->title,
                "start" => $value->start . "" . $value->start,
                "end" => $value->end . "" . $value->end,
                "extendedProps" => [
                    "id_user" => $value->id_user

                ]


            ];
        }
        return response()->json($nueva_agenda);
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
        $medicamentos = Medicamentos::find($id);
        $medicamentos->start = Carbon::createFromFormat('Y-m-d H:i:s', $medicamentos->start)->format('Y-m-d');
        $medicamentos->end = Carbon::createFromFormat('Y-m-d H:i:s', $medicamentos->end)->format('Y-m-d');
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
        $medicamentos->update($request->all());
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
        $medicamentos = Medicamentos::find($id)->delete();

        return response()->json($medicamentos);
    }
}
