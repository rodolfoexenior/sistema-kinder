@extends('adminlte::page')

@section('title', 'Provincias')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de provincias</h1>
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
                    <a class="btn btn-success" href="{{route('admin.provinces.create')}}">Crear nueva provincia</a>
                </div>
                <div class="card-body">
                    @foreach ($countries as $country )
                    <h1><span class="badge bg-secondary">{{$country->name}}</span></h1>
                        @foreach ($country->cities as $city )
                        <h1><span class="badge bg-light">{{$city->name}}</span></h1>
                            <table class="table table-striped">
                                <thead>
                                    <th>Nombre</th>
                                    <th colspan="2"></th>
                                </thead>
                                <tbody>
                                    @foreach ($city->provinces as $province)
                                        <tr>
                                            <td>{{$province->name}}</td>
                                            <td width="10px">
                                                <a class="btn btn-primary btn-sm" href="{{route('admin.provinces.edit',$province)}}">Editar</a>
                                            </td>
                                            <td width="10px">
                                                <form action="{{route('admin.provinces.destroy',$province)}}" method="post">
                                                    @csrf @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                        
                            
                            </table>
                            @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop

