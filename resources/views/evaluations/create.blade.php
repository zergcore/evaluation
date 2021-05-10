@extends('layouts.template')
@section('title','Evaluaciones')
@section('content')
    <h1><b></b></h1>
    <form>
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Nueva evaluación</h5>
        </div>
        <div class="card-body">
          <p class="clasificacion">
          <input id="radio1" type="radio" name="estrellas" value="5"><!--
          --><label for="radio1">★</label><!--
          --><input id="radio2" type="radio" name="estrellas" value="4"><!--
          --><label for="radio2">★</label><!--
          --><input id="radio3" type="radio" name="estrellas" value="3"><!--
          --><label for="radio3">★</label><!--
          --><input id="radio4" type="radio" name="estrellas" value="2"><!--
          --><label for="radio4">★</label><!--
          --><input id="radio5" type="radio" name="estrellas" value="1"><!--
          --><label for="radio5">★</label>
        </p>

        <div class="col-12" style="text-align: center;">
          <span class="fa fa-star" onclick="qualify(this)" style="cursor: pointer;" id="1stars"></span>
          <span class="fa fa-star" onclick="qualify(this)" style="cursor: pointer;" id="2stars"></span>
          <span class="fa fa-star" onclick="qualify(this)" style="cursor: pointer;" id="3stars"></span>
          <span class="fa fa-star" onclick="qualify(this)" style="cursor: pointer;" id="4stars"></span>
          <span class="fa fa-star" onclick="qualify(this)" style="cursor: pointer;" id="5stars"></span>
          <br><br>
        </div>

        
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Su nombre" aria-label="name" aria-describedby="basic-addon2">
           </div>
           <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="El titulo de su evaluación" aria-label="title" aria-describedby="basic-addon2">
           </div>
           <div class="input-group mb-3">
              <textarea class="form-control" placeholder="Su evaluación" aria-label="description"></textarea>
            </div>
          <a href="#" class="btn btn-primary">GRAVAR</a>
        </div>
      </div>




      </form>





@endsection