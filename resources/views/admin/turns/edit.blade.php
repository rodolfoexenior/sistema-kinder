@extends('adminlte::page')

@section('title', 'Turnos')

@section('content_header')
    <h1 class="m-0 text-dark">Actualizar turno</h1>
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
                {!! Form::model($turn, ['route' => ['admin.turns.update', $turn], 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombres') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' =>'Ingrese nombre del turno o servicio']) !!}
                        @error('nombre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción') !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' =>'Ingrese la descripción del turno o servicio']) !!}
                        @error('descripcion')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('precio', 'Precio/Mes') !!}
                        {!! Form::text('precio', null, ['class' => 'form-control', 'placeholder' =>'Ingrese precio por mes']) !!}
                        @error('precio')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('mes', 'Duración/Mes') !!}
                        {!! Form::text('mes', null, ['class' => 'form-control', 'placeholder' =>'Ingrese la cantiad de meses de duración']) !!}
                        @error('mes')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                        {!! Form::submit('Actualizar país', ['class' =>'btn btn-primary btn-lg']) !!}
               
                    
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop