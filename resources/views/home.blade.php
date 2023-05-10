@extends('layouts.app')

@section('page_title', 'Ciaoo')

@section('content')
    <h1>Stamp i titoli del database</h1>
    @foreach($dati as $element)
        <span>{{$element['title']}}</span>
        <img src="{{$element['thumb']}}" alt="...">
    @endforeach
@endsection
    