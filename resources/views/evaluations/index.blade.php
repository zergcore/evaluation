@extends('layouts.template')
@section('title','Evaluation')
@section('content')
    <h1> <b>Evaluaciones</b> </h1>
    <a href="{{route('evaluations.create')}}">Nueva evaluación</a>
    <ul>
        @foreach ($evaluations as $evaluation)
        <li><a href="{{route('evaluations.show' , $evaluation->id)}}">{{$evaluation ->name}}</a></li>
        @endforeach
    </ul>
    {{$evaluations->links()}}
@endsection