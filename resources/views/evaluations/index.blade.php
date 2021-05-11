@extends('layouts.template')
@section('title','Evaluation')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">

@endsection

@section('content')
    <h1> <b>Evaluaciones</b> <a href="{{route('evaluations.create')}}" class="btn btn-light"><i class="fas fa-plus-square"></i></a></h1>

    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contenido-modal">
        Abrir modal
    </button> --}}

    {{-- <div class="modal" tabindex="-1" id="contenido-modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div> --}}

    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="evaluaciones">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Fecha de creación</th>
                            <th>Hora de creación</th>
                            <th>Nombre de la evaluación</th>
                            <th>Calificación</th>
                            <th>Titulo</th>
                            <th>Descripción parcial</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach ($evaluations as $evaluation)
                        <tr>
                            <td>{{$evaluation->id}}</td>
                            <td>{{$evaluation->created_at->diffForHumans()}}</td>
                            <td>{{$evaluation->created_at->diffForHumans()}}</td>
                            <td><a href="{{route('evaluations.show' , $evaluation->id)}}">{{$evaluation ->name}}</a></td>
                            <td>
                                <div class="col-12" style="">
                                    <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="1{{$evaluation->name}}"></span>
                                    <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="2{{$evaluation->name}}"></span>
                                    <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="3{{$evaluation->name}}"></span>
                                    <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="4{{$evaluation->name}}"></span>
                                    <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="5{{$evaluation->name}}"></span>
                                    <br><br>
                                </div>
                            </td>
                            <td>{{$evaluation->title}}</td>
                            <td>{{$evaluation->description}}</td>
                            <td>
                                <a href="{{route('evaluations.show' , $evaluation->id)}}" class="btn btn-light"><i class="fas fa-search"></i></a>
                                <form action="{{route('evaluations.destroy', $evaluation)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-light" type="submit"><i class="far fa-trash-alt"></i></button>
                                  </form>
                                  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#contenido-modal{{$evaluation->id}}">
                                    Abrir
                                </button>

                                <div class="modal" tabindex="-1" id="contenido-modal{{$evaluation->id}}">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title"></h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">

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
        
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div>
                            </td>
                        </tr>

                        

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

@endsection

@section('js')

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
            $('#evaluaciones').DataTable({
                responsive:true,
                autoWidth:false,
                "language": {
                    "lengthMenu": "Muestra _MENU_ registros",
                    "zeroRecords": "No se ha encontrado nada - disculpa",
                    "info": "Mostrando _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponbles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    'search' : 'Buscar:',
                    'paginate': {
                        'next': 'Siguiente',
                        'previous' : 'Anterior'
                    }
                }
            });
    </script>

@endsection