@extends('adminlte::page')

@section('title', 'Paises')

@section('content_header')
    <h1 class="m-0 text-dark">Crear gestión</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.yearbooks.store']) !!}
                        <div class="form-group">
                            {!! Form::label('gestion', 'Gestión') !!}
                            {!! Form::text('gestion', null, ['class' => 'form-control', 'placeholder' =>'Registre la gesitón']) !!}
                            @error('gestion')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
 
                            {!! Form::submit('Crear gestión', ['class' =>'btn btn-primary btn-lg']) !!}
                   
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop