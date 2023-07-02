@extends('adminlte::page')

@section('title', 'Distribución de cursos')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de cursos y sus designaciones</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('info'))
            <div class="alert alert-info">
                <strong>{{session('info')}}</strong>
            </div>
        @endif
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-success" href="{{route('admin.coursemanagments.create')}}">Crear nuevo y sus designaciones</a>
                </div>
                <div class="card-body">
                                     
                    <table class="table table-striped">
                        <thead>
                            <th>Gestion</th>
                            <th>Curso</th>
                            <th>Profesor</th>
                            <th>Turno</th>
                            <th colspan="2"></th>
                        </thead>
                        <tbody>
                            @foreach ($coursemanagments as $coursemanagment )  
                                <tr>
                                    <td>{{$coursemanagment->managment_id}}</td>
                                    <td>{{$coursemanagment->course_id}}</td>
                                    <td>{{$coursemanagment->teacher_id}}</td>
                                    <td>{{$coursemanagment->turn_id}}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.coursemanagments.edit',$coursemanagment)}}">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.coursemanagments.destroy',$coursemanagment)}}" method="post">
                                            @csrf @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                

                </div>
            </div>
        </div>
    </div>
@stop

