@extends('adminlte::page')

@section('title', 'Paises')

@section('content_header')
    <h1 class="m-0 text-dark">Actualizar país</h1>
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
                {!! Form::model($country, ['route' => ['admin.countries.update', $country], 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombres') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingrese nombre del país']) !!}
                        @error('name')
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