@extends('adminlte::page')

@section('title', 'Gestión')

@section('content_header')
    <h1 class="m-0 text-dark">Actualizar gestión</h1>
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
            <div class="card-body">
                {!! Form::model($managment, ['route' => ['admin.managments.update', $managment], 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::label('gestion', 'Gestión') !!}
                        {!! Form::text('gestion', null, ['class' => 'form-control', 'placeholder' =>'Ingrese la gestión']) !!}
                        @error('gestion')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                        {!! Form::submit('Actualizar turno o servicio', ['class' =>'btn btn-primary btn-lg']) !!}
               
                    
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop