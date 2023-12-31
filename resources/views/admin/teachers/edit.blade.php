@extends('adminlte::page')

@section('title', 'Maestro')

@section('content_header')
    <h1 class="m-0 text-dark">Actualizar maestro</h1>
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
                {!! Form::model($teacher, ['route' => ['admin.teachers.update', $teacher], 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::label('nombres', 'Nombres') !!}
                        {!! Form::text('nombres', null, ['class' => 'form-control', 'placeholder' =>'Ingrese su(s) nombre(s)']) !!}
                        @error('nombres')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('paterno', 'Apellido paterno') !!}
                        {!! Form::text('paterno', null, ['class' => 'form-control', 'placeholder' =>'Ingrese su apellido paterno']) !!}
                        @error('paterno')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('materno', 'Apellido materno') !!}
                        {!! Form::text('materno', null, ['class' => 'form-control', 'placeholder' =>'Ingrese su apellido materno']) !!}
                        @error('materno')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('telefono', 'Teléfono móvil') !!}
                        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' =>'Ingrese su númereo de teléfono principal']) !!}
                        @error('telefono')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('direccion', 'Dirección') !!}
                        {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' =>'Ingrese su dirección completa']) !!}
                        @error('direccion')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('sexo', 'Sexo') !!}
                        {!! Form::select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'], null, ['class' => 'form-control', 'placeholder' =>'Seleccione su sexo']) !!}
                        @error('sexo')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('num_cedula', 'Carnet de identidad') !!}
                        {!! Form::text('num_cedula', null, ['class' => 'form-control', 'placeholder' =>'Ingrese su numero de carnet sin extención']) !!}
                        @error('num_cedula')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('extension', 'Emisión') !!}
                        {!! Form::select('extension', ['SCZ' => 'Santa Cruz', 'CBBA' => 'Cochabamba','LPZ' => 'La Paz', 'OR' => 'Oruro','PN' => 'Pando', 'BN' => 'Beni','SUC' => 'Sucre', 'POT' => 'Potosí','TJ' => 'Tarija'], null, ['class' => 'form-control', 'placeholder' =>'Seleccione donde fue emitida su cédula']) !!}
                        @error('extesion')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('matricula', 'Matrícula profesional') !!}
                        {!! Form::text('matricula', null, ['class' => 'form-control', 'placeholder' =>'Restro de matrícula profesional']) !!}
                        @error('matricula')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('especialidad', 'Especialidad') !!}
                        {!! Form::text('especialidad', null, ['class' => 'form-control', 'placeholder' =>'Ingrese la especialidad']) !!}
                        @error('especialidad')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('cargo', 'Cargo') !!}
                        {!! Form::select('cargo', ['Profesor' => 'Profesor', 'Tia' => 'Tia','Ayudante' => 'Ayudante', 'Otro' => 'Otro'], null, ['class' => 'form-control', 'placeholder' =>'Seleccione el cargo']) !!}
                        @error('cargo')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('nacimiento', 'Fecha de nacimiento') !!}
                        {!! Form::date('nacimiento',null, ['class' => 'form-control', 'placeholder' =>'Ingrese su apellido paterno']) !!}
                        @error('nacimiento')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('medio_difusion', 'Medio por el que se enteró') !!}
                        {!! Form::select('medio_difusion', ['Redes sociales' => 'Redes sociales', 'Colega' => 'Colega', 'Magisterio' => 'Magisterio', 'Otros' => 'Otros'], null, ['class' => 'form-control', 'placeholder' =>'Seleccione como nos conoció']) !!}
                        @error('medio_difusion')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('user_id', 'Correo electrónico') !!}
                        {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' =>'Seleccione email del ususario']) !!}
                        @error('user_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('foto', 'Fotografía del titular') !!}
                        {!! Form::text('foto', null, ['class' => 'form-control', 'placeholder' =>'Seleccione archivo de footgrafía']) !!}
                        @error('foto')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                        {!! Form::submit('Actualizar maestro', ['class' =>'btn btn-primary btn-lg']) !!}
               
                    
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop