@extends('adminlte::page')

@section('title', 'Turnos')

@section('content_header')
    <h1 class="m-0 text-dark">Crear turno</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.turns.store']) !!}
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre') !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el nombre del nuevo curso']) !!}
                            @error('nombre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripción') !!}
                            {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' =>'Registre la descripción del curso']) !!}
                            @error('descripcion')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('precio', 'Precio mensual') !!}
                            {!! Form::text('precio', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el precio por mes']) !!}
                            @error('precio')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('mes', 'Meses') !!}
                            {!! Form::text('mes', null, ['class' => 'form-control', 'placeholder' =>'Registre la duracion en meses']) !!}
                            @error('mes')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
 
                            {!! Form::submit('Crear turno o servicio', ['class' =>'btn btn-primary btn-lg']) !!}
                   
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop