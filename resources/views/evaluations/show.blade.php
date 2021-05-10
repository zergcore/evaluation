@extends('layouts.template')
@section('title','Evaluacion: '. $evaluation->name)
@section('content')
<h5><a href="{{route('evaluations.index')}}">Volver a evaluaciones</a></h5>

<div class="container">
  <h1><b>Nombre: {{$evaluation->name}}</b> </h1>
    <div class="col-12" style="text-align: center;">
      <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="1stars"></span>
      <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="2stars"></span>
      <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="3stars"></span>
      <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="4stars"></span>
      <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="5stars"></span>
      <br><br>
    </div>
    <h2><b>Titulo:</b> {{$evaluation->title}}</h2>
    <p>{{$evaluation->description}}</p>
</div>


@endsection