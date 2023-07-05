@extends('adminlte::page')

@section('title', 'Paises')

@section('content_header')
    <h1 class="m-0 text-dark">Crear país</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.countries.store']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombres') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Nombre del país']) !!}
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
 
                            {!! Form::submit('Crear país', ['class' =>'btn btn-primary btn-lg']) !!}
                   
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop