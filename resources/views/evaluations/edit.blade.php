@extends('layouts.template')
@section('title','Evaluaciones edit')
@section('content')
    <h1><b></b></h1>

    <h5><a href="{{route('evaluations.index')}}">Volver a evaluaciones</a></h5>

    <form action="{{route('evaluations.update', $evaluation)}}" method="POST">

      @csrf

      @method('put')

      <div class="container">
        <div class="card" id="ce">
          <div class="card-header">
            <h5 class="card-title" style="text-align: center;">Editar evaluación</h5>
          </div>
          <div class="card-body">
  
            <div class="col-12" style="text-align: center;">
              <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="cursor: pointer;" id="1stars"></span>
              <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="cursor: pointer;" id="2stars"></span>
              <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="cursor: pointer;" id="3stars"></span>
              <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="cursor: pointer;" id="4stars"></span>
              <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="cursor: pointer;" id="5stars"></span>
              <br><br>
            </div>

            <div class="input-group mb-3">
              <input type="text" class="rate form-control" aria-label="rate" aria-describedby="basic-addon2" name="rate" id="rate" value="{{$evaluation->stars}}">
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Su nombre" aria-label="name" aria-describedby="basic-addon2" name="name" value="{{$evaluation->name}}">
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="El titulo de su evaluación" aria-label="title" aria-describedby="basic-addon2" name="title" value="{{$evaluation->title}}">
            </div>
            <div class="input-group mb-3">
                <textarea class="form-control" placeholder="Su evaluación" aria-label="description" name="description" rows='5'>{{$evaluation->description}}</textarea>
            </div>
          </div>
  
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-secondary" type="submit">Actualizar</button>
          </div>
        </div>
        
      </div>
    </form>

@endsection
