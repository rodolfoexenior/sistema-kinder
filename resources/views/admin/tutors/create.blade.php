@extends('adminlte::page')

@section('title', 'Tutores')

@section('content_header')
    <h1 class="m-0 text-dark">Crear tutor</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.tutors.store']) !!}
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
                        {{-- <div class="form-group">
                            {!! Form::label('pais', 'País de origen') !!}
                            {!! Form::select('pais', $countries, null, ['class' => 'form-control', 'placeholder' =>'Seleccione nacionalidad']) !!}
                            @error('extesion')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('cities_id', 'Ciudad de origen') !!}
                            {!! Form::select('cities_id', ['1' => 'Santa Cruz', 'CBBA' => 'Cochabamba','LPZ' => 'La Paz', 'OR' => 'Oruro','PN' => 'Pando', 'BN' => 'Beni','SUC' => 'Sucre', 'POT' => 'Potosí','TJ' => 'Tarija'], null, ['class' => 'form-control', 'placeholder' =>'Seleccione donde fue emitida su cédula']) !!}
                            @error('extesion')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            {!! Form::label('cities_id', 'País de origen') !!}
                        </br>
                            <select class="form-control" name="country_id" id="country_id" onchange="showCities(this.value)">
                                <option value="">Seleccione el país</option>
                                @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('cities_id', 'Departamento donde fué otorgada su cédula') !!}
                        </br>
                            <select class="form-control" name="city_id" id="city_id">
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('num_cedula', 'Carnet de identidad') !!}
                            {!! Form::text('num_cedula', null, ['class' => 'form-control', 'placeholder' =>'Ingrese su numero de carnet sin extención']) !!}
                            @error('num_cedula')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                       
                        
                        <div class="form-group">
                            {!! Form::label('nacimiento', 'Fecha de nacimiento') !!}
                            {!! Form::date('nacimiento', null, ['class' => 'form-control', 'placeholder' =>'Ingrese su apellido paterno']) !!}
                            @error('nacimiento')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('medio_difusion', 'Medio por el que se enteró') !!}
                            {!! Form::select('medio_difusion', ['Redes sociales' => 'Redes sociales', 'Amistad' => 'Amistad', 'Vecino' => 'Vecino', 'Otros' => 'Otros'], null, ['class' => 'form-control', 'placeholder' =>'Seleccione como nos conoció']) !!}
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
 
                            {!! Form::submit('Crear tutor', ['class' =>'btn btn-primary btn-lg']) !!}
                   
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        function showCities(id){
           $.get("/sistema-kinder/public/api/country/"+ id, function(cities){
                let selectCities = document.querySelector("#city_id")
                selectCities.innerHTML = "";
                cities.forEach(city => {
                    let option =document.createElement("option");
                    option.setAttribute("value", city.id);
                    option.innerHTML = city.name;
                    selectCities.appendChild(option);
                });
           });
        }
    </script>
@stop