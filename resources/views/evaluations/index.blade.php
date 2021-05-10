@extends('layouts.template')
@section('title','Evaluation')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
    <h1> <b>Evaluaciones</b> </h1>
    <a href="{{route('evaluations.create')}}">Nueva evaluación</a>
    {{-- <ul>
        @foreach ($evaluations as $evaluation)
        <li><a href="{{route('evaluations.show' , $evaluation->id)}}">{{$evaluation ->name}}</a></li>
        @endforeach
    </ul>
    {{$evaluations->links()}} --}}

    {{-- <div class="container"> --}}
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
                                <div class="col-12" style="text-align: center;">
                                <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="1stars"></span>
                                <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="2stars"></span>
                                <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="3stars"></span>
                                <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="4stars"></span>
                                <span class="fa fa-star" onclick="show(this, {{$evaluation->stars}})" style="" id="5stars"></span>
                                <br><br>
                              </div>
                            </td>
                            <td>{{$evaluation->title}}</td>
                            <td>{{$evaluation->description}}</td>
                            <td><a href="{{route('evaluations.show' , $evaluation->id)}}">Ver</a> <a href="">Eliminar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    {{-- </div> --}}

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