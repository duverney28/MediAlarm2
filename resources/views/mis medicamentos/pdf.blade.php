<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Mis Medicamentos</title>
      <!-- <link href="{{ public_path('css/.css') }}" rel="stylesheet" type="text/css">   -->
      <!-- <link href="{{ asset('css/pdfs.css') }}" rel="stylesheet">  -->

      <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/locales-all.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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