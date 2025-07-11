<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contoh Blade</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <ol>
    @foreach($products as $contoh)
        <li>{{ $contoh }}</li>
    @endforeach
    </ol>
</body>
</html> -->

@extends('layout')
@section('title', 'Contoh Blade')
@section('content')
<h1>{{ $title }}</h1>
<ol>
@foreach($products as $contoh)
    <li>{{ $contoh }}</li>  
@endforeach
</ol>
@endsection