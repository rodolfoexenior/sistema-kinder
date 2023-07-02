@extends('adminlte::page')

@section('title', 'Gestión')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de gestiones</h1>
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
                    <a class="btn btn-success" href="{{route('admin.managments.create')}}">Crear nueva gestión</a>
                </div>
                <div class="card-body">
                    
                    <table class="table table-striped">
                        <thead>
                            <th>Gestión</th>
                            <th colspan="2"></th>
                        </thead>
                        <tbody>
                            @foreach ($managments as $managment)
                                <tr>
                                    <td>
                                       {{$managment->gestion}}
                                    </td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.managments.edit',$managment)}}">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.managments.destroy',$managment)}}" method="post">
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

