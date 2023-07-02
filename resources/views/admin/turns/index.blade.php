@extends('adminlte::page')

@section('title', 'Turnos')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de turnos o servicios</h1>
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
                    <a class="btn btn-success" href="{{route('admin.turns.create')}}">Crear turno o servicio</a>
                </div>
                <div class="card-body">
                    
                    <table class="table table-striped">
                        <thead>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio/mes</th>
                            <th>Duración/Mes</th>
                            <th colspan="2"></th>
                        </thead>
                        <tbody>
                            @foreach ($turns as $turn)
                                <tr>
                                    <td>
                                        {{$turn->nombre}}
                                    </td>
                                    <td>
                                        {{$turn->descripcion}}
                                    </td>
                                    <td>
                                        {{$turn->precio}}
                                    </td>
                                    <td>
                                        {{$turn->mes}}
                                    </td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.turns.edit',$turn)}}">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.turns.destroy',$turn)}}" method="post">
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

