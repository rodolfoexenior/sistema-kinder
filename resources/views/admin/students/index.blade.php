@extends('adminlte::page')

@section('title', 'Alumnos')

@section('content_header')
    <h1 class="m-0 text-dark">Listado general de alumnos</h1>
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
                    <a class="btn btn-success" href="{{route('admin.students.create')}}">Crear nuevo alumno</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>Nombre</th>
                            <th>Paterno</th>
                            <th>Matetrno</th>
                            <th>sexo</th>
                            <th>Cédula</th>
                            <th colspan="2"></th>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->nombres}}</td>
                                    <td>{{$student->paterno}}</td>
                                    <td>{{$student->materno}}</td>
                                    <td>{{$student->sexo}}</td>
                                    <td>{{$student->num_cedula}}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.students.edit',$student)}}">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.students.destroy',$student)}}" method="post">
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

