@extends('layouts.app')

@section('page_title', 'Ciaoo')

@section('content')
    <div class="wrapper-main">
        <div class="team-titans">
            <div class="button-blue">
                <h2>CURRENT SERIES</h2>
            </div>
        </div>
        <div class="cards-container">
            @foreach($dati as $element)
                <div class="cards">
                    <img src="{{$element['thumb']}}" alt="..">
                    <h3>{{$element['series']}}</h3>
                </div>
            @endforeach
            <div class="button-blue">
                <span>LOAD MORE</span>
            </div>
        </div>
    </div>
@endsection
    