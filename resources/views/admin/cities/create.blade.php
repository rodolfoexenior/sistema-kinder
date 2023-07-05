@extends('adminlte::page')

@section('title', 'Paises')

@section('content_header')
    <h1 class="m-0 text-dark">Crear ciudad</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.cities.store']) !!}
                    <div class="form-group">
                        {!! Form::label('country_id', 'Pais') !!}
                        {!! Form::select('country_id', $country, null, ['class' => 'form-control', 'placeholder' =>'Seleccione el pais']) !!}
                        @error('country_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Nombres') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingresar el nombre de la ciudad']) !!}
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
 
                            {!! Form::submit('Crear ciudad', ['class' =>'btn btn-primary btn-lg']) !!}
                   
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop