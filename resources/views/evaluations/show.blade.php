@extends('layouts.template')
@section('title','Evaluacion: '. $evaluation->name)
@section('content')
<h5><a href="{{route('evaluations.index')}}">Volver a evaluaciones</a></h5>
<h5><a href="{{route('evaluations.edit', $evaluation)}}">Editar evaluacion</a></h5>
<form action="{{route('evaluations.destroy', $evaluation)}}" method="POST">
  @csrf
  @method('delete')
  <button type="submit">Eliminar evaluacion</button>
</form>

<div class="container">
  <h1><b>Nombre: {{$evaluation->name}}</b> </h1>
    <div class="col-12" style="text-align: center;">
      <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="1{{$evaluation->name}}"></span>
      <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="2{{$evaluation->name}}"></span>
      <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="3{{$evaluation->name}}"></span>
      <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="4{{$evaluation->name}}"></span>
      <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="5{{$evaluation->name}}"></span>
      <br><br>
    </div>
    <h2><b>Titulo:</b> {{$evaluation->title}}</h2>
    <p>{{$evaluation->description}}</p>
</div>


@endsection