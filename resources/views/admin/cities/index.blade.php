@extends('adminlte::page')

@section('title', 'Ciudades')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de ciudades</h1>
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
                    <a class="btn btn-success" href="{{route('admin.cities.create')}}">Crear nueva ciudad</a>
                </div>
                <div class="card-body">
                    @foreach ($countries as $country )
                    <h1><span class="badge bg-secondary">{{$country->name}}</span></h1>
                   
                    <table class="table table-striped">
                        <thead>
                            <th>Nombre</th>
                            <th colspan="2"></th>
                        </thead>
                        <tbody>
                            @foreach ($country->cities as $city)
                                <tr>
                                    <td>{{$city->name}}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.cities.edit',$city)}}">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.cities.destroy',$city)}}" method="post">
                                            @csrf @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@stop

