@extends('adminlte::page')

@section('title', 'Paises')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de paises</h1>
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
                    <a class="btn btn-success" href="{{route('admin.countries.create')}}">Crear nuevo país</a>
                </div>
                <div class="card-body">
                    
                    <table class="table table-striped">
                        <thead>
                            <th>Nombre</th>
                            <th colspan="2"></th>
                        </thead>
                        <tbody>
                            @foreach ($countries as $country)
                                <tr>
                                    <td>
                                        <strong>{{$country->name}}</strong>{{'. Ciudades: '}}
                                        @foreach ($country->cities as $city)
                                            {{$city->name}}{{', '}}
                                        @endforeach      
                                    </td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.countries.edit',$country)}}">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.countries.destroy',$country)}}" method="post">
                                            @csrf @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                        </form>
                                    </td>
                                    
                                </tr>
                            @endforeach

                        </tbody>
                        <a class="btn btn-info btn-sm" href="{{route('admin.cities.create')}}">Nueva ciudad</a>
                    </table>
                
                </div>
            </div>
        </div>
    </div>
@stop

