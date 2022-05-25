@extends('layouts.app')
@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-10">
            <h2 class="text-center mb-5">Mis Medicamentos</h2>

            <table class="table table-bordered table-striped text-center">

                <thead>

                    <th>Nombre Medicamento</th>
                    <th>Tipo de Medicamento</th>
                    <th>Dosis del Medicamento</th>
                    <th>Número de Dosis del Medicamento</th>
                    <th>Fecha de Vencimiento del Medicamento</th>
                    <th>hora</th>
                    <th>Inicio Tratamiendo</th>
                    <th>Fin del tratamiento</th>
                 
                   

                </thead>

                <tbody>

                    @foreach ($medicamentos as $medi )
                    <tr>

                        <td>{{$medi->title}}</td>
                        <td>{{$medi->tipomedicamento}}</td>
                        <td>{{$medi->dosismedi}}</td>
                        <td>{{$medi->numeropastillas}}</td>
                        <td>{{$medi->fechavencimiento}}</td>
                        <td>{{$medi->hora}}</td>
                        <td>{{$medi->start}}</td>
                        <td>{{$medi->end}}</td>
                     
                      

                    </tr>
                    @endforeach
                </tbody>

            </table>

                <a href="{{route ('mismedicamentos.pdf') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                    {{_('Generar PDF')}}
                </a>

           
        </div>

    </div>



</div>




@endsection