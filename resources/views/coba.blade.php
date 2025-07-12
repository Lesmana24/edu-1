@extends('layout')
@section('title', 'Contoh Blade')
@section('content')
<h1>{{ $title }}</h1>
@if($ifLogin)
<p>Ini if login</p>
@else
<p>Ini else login</p>
@endif
<x-alert>
    <p>Teks Alert</p>
    <ol>
    @foreach($products as $item)
    <li><p>{{ $item }}</p></li>
    @endforeach
    </ol>
</x-alert>
@endsection