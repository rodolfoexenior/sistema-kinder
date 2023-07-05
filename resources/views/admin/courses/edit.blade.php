@extends('adminlte::page')

@section('title', 'Paises')

@section('content_header')
    <h1 class="m-0 text-dark">Actualizar curso</h1>
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
                {!! Form::model($course, ['route' => ['admin.courses.update', $course], 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombres') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' =>'Ingrese nombre del curso']) !!}
                        @error('nombre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción') !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' =>'Ingrese la descripción del curso']) !!}
                        @error('descripcion')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                        {!! Form::submit('Actualizar curso', ['class' =>'btn btn-primary btn-lg']) !!}
               
                    
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop