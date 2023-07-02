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
                        {!! Form::select('managment_id', $managments, null, ['class' => 'form-control', 'placeholder' =>'Seleccione la gestión para asignar']) !!}
                        @error('managment_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('course_id', 'Curso') !!}
                        {!! Form::select('course_id', $courses, null, ['class' => 'form-control', 'placeholder' =>'Seleccione el curso para asignar']) !!}
                        @error('course_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('teacher_id', 'Maestro') !!}
                        {!! Form::select('teacher_id', $teachers, null, ['class' => 'form-control', 'placeholder' =>'Seleccione el maestro para asignar']) !!}
                        @error('teacher_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('turn_id', 'Turno') !!}
                        {!! Form::select('turn_id', $turns, null, ['class' => 'form-control', 'placeholder' =>'Seleccione el turno para asignar']) !!}
                        @error('turn_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    
                            {!! Form::submit('Crear distribución', ['class' =>'btn btn-primary btn-lg']) !!}
                   
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop