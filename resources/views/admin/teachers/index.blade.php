@extends('adminlte::page')

@section('title', 'Maestros')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de maestros</h1>
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
                    <a class="btn btn-success" href="{{route('admin.teachers.create')}}">Crear nuevo maestro</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>Nombre</th>
                            <th>Paterno</th>
                            <th>Matetrno</th>
                            <th>Cargo</th>
                            <th>Teléfono</th>
                            <th colspan="2"></th>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{$teacher->nombres}}</td>
                                    <td>{{$teacher->paterno}}</td>
                                    <td>{{$teacher->materno}}</td>
                                    <td>{{$teacher->cargo}}</td>
                                    <td>{{$teacher->telefono}}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.teachers.edit',$teacher)}}">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.teachers.destroy',$teacher)}}" method="post">
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

