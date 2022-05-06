@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <title>Title of the document</title>
</head>

<div class="container">

    <x-maps-leaflet :centerPoint="['lat'=> 4.815048600779418, 'long' => -75.69549549390601]" :zoomLevel="13" :markers="[['lat'=>  4.815048600779418, 'long' => -75.69549549390601]]">

    </x-maps-leaflet>

</div>

</body>

</html>

@endsection