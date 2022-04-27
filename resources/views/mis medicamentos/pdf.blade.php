<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Mis Medicamentos</title>
      <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css"> 
</head> 


<body>


        <h2>Mis Medicamentos</h2>

        <table class="table table-striped table-hover" >

            <thead class="thead">
    <tr>
                <th>Nombre Medicamento</th>
                <th>Frecuencia</th>
                <th>hora</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($data as $medi )
                <tr>

                    <td>{{$medi->title}}</td>
                    <td>{{$medi->frecuencia}}</td>
                    <td>{{$medi->hora}}</td>


                </tr>
                @endforeach
            </tbody>

        </table>

        


</body>
</html>