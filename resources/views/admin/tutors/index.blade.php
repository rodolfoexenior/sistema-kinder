@extends('adminlte::page')

@section('title', 'Tutores')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de tutores</h1>
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
                    <a class="btn btn-success" href="{{route('admin.tutors.create')}}">Crear nuevo tutor</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>Nombre</th>
                            <th>Paterno</th>
                            <th>Matetrno</th>
                            <th>Cédula</th>
                            <th>Teléfono</th>
                            <th colspan="2"></th>
                        </thead>
                        <tbody>
                            @foreach ($tutors as $tutor)
                                <tr>
                                    <td>{{$tutor->nombres}}</td>
                                    <td>{{$tutor->paterno}}</td>
                                    <td>{{$tutor->materno}}</td>
                                    <td>{{$tutor->num_cedula}}</td>
                                    <td>{{$tutor->telefono}}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.tutors.edit',$tutor)}}">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.tutors.destroy',$tutor)}}" method="post">
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

