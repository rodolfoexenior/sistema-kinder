@extends('adminlte::page')

@section('title', 'Cursos')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de cursos</h1>
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
                    <a class="btn btn-success" href="{{route('admin.courses.create')}}">Crear nuevo curso</a>
                </div>
                <div class="card-body">
                    
                    <table class="table table-striped">
                        <thead>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th colspan="2"></th>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>
                                        {{$course->nombre}}
                                    </td>
                                    <td>
                                        {{$course->descripcion}}
                                    </td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.courses.edit',$course)}}">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.courses.destroy',$course)}}" method="post">
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

