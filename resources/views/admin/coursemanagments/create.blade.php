@extends('adminlte::page')

@section('title', 'Distribución')

@section('content_header')
    <h1 class="m-0 text-dark">Creando distribución</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.coursemanagments.store']) !!}
                    <div class="form-group">
                        {!! Form::label('managment_id', 'Gestión') !!}
                        {!! Form::select('country_id', $country, null, ['class' => 'form-control', 'placeholder' =>'Seleccione el pais']) !!}
                        @error('country_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Nombres') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Nombre del país']) !!}
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