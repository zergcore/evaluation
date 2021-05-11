@extends('layouts.template')
@section('title','Evaluacion: '. $evaluation->name)
@section('content')

<div class="container">
  <div class="row">
    <div class="col xs-1">
      <a href="{{route('evaluations.index')}}" class="btn btn-light"><i class="fas fa-chevron-left"></i></a>
    </div>
    <div class="col xs-1">
      <a href="{{route('evaluations.edit', $evaluation)}}" class="btn btn-light"><i class="far fa-edit"></i></a>
    </div>
    <div class="col xs-1">
      <form action="{{route('evaluations.destroy', $evaluation)}}" method="POST">
        @csrf
        @method('delete')
      <button class="btn btn-light" type="submit"><i class="far fa-trash-alt"></i></button>
      </form>
    </div>
  </div>
</div>
<h5>
  
</h5>
<h5></h5>


<div class="container">
  <div class="card">
    <div class="card-header">
      <div class="col-12" style="text-align: center;">
        <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="1{{$evaluation->name}}"></span>
        <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="2{{$evaluation->name}}"></span>
        <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="3{{$evaluation->name}}"></span>
        <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="4{{$evaluation->name}}"></span>
        <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="5{{$evaluation->name}}"></span>
        <br><br>
      </div>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p><b>Titulo:</b> {{$evaluation->title}}</p>
        <footer class="blockquote-footer">{{$evaluation->description}} <cite title="Source Title"><b> Nombre: </b>{{$evaluation->name}}</cite></footer>
      </blockquote>
    </div>
    <div class="card-footer text-muted">
      {{$evaluation->created_at->diffForHumans()}}
    </div>
  </div>
</div>




@endsection