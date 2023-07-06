@extends('adminlte::page')

@section('title', 'Alumno')

@section('content_header')
    <h1 class="m-0 text-dark">Crear alumno</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.students.store','enctype' => 'multipart/form-data']) !!}
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
                            {!! Form::label('sexo', 'Sexo') !!}
                            {!! Form::select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'], null, ['class' => 'form-control', 'placeholder' =>'Seleccione su sexo']) !!}
                            @error('sexo')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('prenatal', 'Datos prenatales') !!}
                            {!! Form::text('prenatal', null, ['class' => 'form-control', 'placeholder' =>'Realice un resumen del proceso prenatal y tipo de parto']) !!}
                            @error('prenatal')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('habla', 'Fecha desde que habla') !!}
                            {!! Form::date('habla', null, ['class' => 'form-control', 'placeholder' =>'Ingrese la fecha desde cuando  habla']) !!}
                            @error('habla')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('camina', 'Fecha desde que camina') !!}
                            {!! Form::date('camina', null, ['class' => 'form-control', 'placeholder' =>'Ingrese la fecha desde cuando camina']) !!}
                            @error('camina')
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
                            {!! Form::label('Pias', 'País de origen') !!}
                        </br>
                            <select class="form-control" name="country_id" id="country_id" onchange="showCities(this.value)">
                                <option value="">País de su cédula</option>
                                @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('city_id', 'Departamento donde fué expedida') !!}
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
                            {!! Form::label('num_certificado', 'Número de certificado de nacimiento') !!}
                            {!! Form::text('num_certificado', null, ['class' => 'form-control', 'placeholder' =>'Registre número de certificado de nacimiento']) !!}
                            @error('num_certificado')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('oficialia', 'Oficialia') !!}
                            {!! Form::text('oficialia', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el númeo de oficialia']) !!}
                            @error('oficialia')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('libro', 'Libro') !!}
                            {!! Form::text('libro', null, ['class' => 'form-control', 'placeholder' =>'Ingreseel número de libro']) !!}
                            @error('libro')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('partida', 'Partida') !!}
                            {!! Form::text('partida', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el número de partida']) !!}
                            @error('partida')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('folio', 'Folio') !!}
                            {!! Form::text('folio', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el número de folio']) !!}
                            @error('folio')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('Pias', 'País de origen') !!}
                        </br>
                            <select class="form-control" name="certificado_id" id="certificado_id" onchange="showCiudades(this.value)">
                                <option value="">País de su certificado</option>
                                @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('ciudad_id', 'Departamento') !!}
                        </br>
                            <select class="form-control" name="ciudad_id" id="ciudad_id">
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('province_id', 'Provincia') !!}
                        </br>
                            <select class="form-control" name="province_id" id="province_id">
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('fecha_registro', 'Fecha de registro') !!}
                            {!! Form::date('fecha_registro', null, ['class' => 'form-control', 'placeholder' =>'Ingrese la fecha de registro']) !!}
                            @error('fecha_registro')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <img id="imageFoto">
                            {!! Form::label('foto', 'Fotografía del alumno') !!}
                            {{-- {!! Form::file('foto', null, ['onchange'=>"previewImage(event, '#imgPreview')", 'class' => 'form-control', 'placeholder' =>'Seleccione archivo de footgrafía']) !!} --}}
                            <input type="file" name="foto" id="foto" value="Seleccionar foto" accept="image/*" onchange="previewFoto(event, '#imageFoto')" class="img-fluid">
                            @error('foto')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <img id="imageFront">
                            {!! Form::label('foto_ci_frontal', 'Foto de carnet parte frontal del alumno') !!}
                            {{-- {!! Form::file('foto_ci_frontal', null, ['class' => 'form-control', 'placeholder' =>'Seleccione archivo de footgrafía']) !!} --}}
                            <input type="file" name="foto_ci_frontal" id="foto_ci_frontal" value="Seleccionar foto" accept="image/*" onchange="previewFront(event, '#imageFront')" class="img-fluid">
                            @error('foto_ci_frontal')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <img id="imagePos">
                            {!! Form::label('foto_ci_posterior', 'Foto de carnet parte posterior del alumno') !!}
                            {{-- {!! Form::file('foto_ci_posterior', null, ['class' => 'form-control', 'placeholder' =>'Seleccione archivo de footgrafía']) !!} --}}
                            <input type="file" name="foto_ci_posterior" id="foto_ci_posterior" value="Seleccionar foto" accept="image/*" onchange="previewPos(event, '#imagePos')" class="img-fluid">
                            @error('foto_ci_posterior')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <img id="imageNac">
                            {!! Form::label('foto_cert_nac', 'Foto del certificado de nacimiento') !!}
                            {{--   {!! Form::file('foto_cert_nac', null, ['class' => 'form-control', 'placeholder' =>'Seleccione archivo de footgrafía']) !!} --}}
                            <input type="file" name="foto_cert_nac" id="foto_cert_nac" value="Seleccionar foto" accept="image/*" onchange="previewNac(event, '#imageNac')" class="img-fluid">
                            @error('foto_cert_nac')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
 
                            {!! Form::submit('Crear alumno', ['class' =>'btn btn-primary btn-lg']) !!}
                   
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        function showCiudades(id){
           $.get("/sistema-kinder/public/api/country/"+ id, function(ciudad){
                let selectCiudad = document.querySelector("#ciudad_id")
                selectCiudad.innerHTML = "";
                ciudad.forEach(city => {
                    let option =document.createElement("option");
                    option.setAttribute("value", city.id);
                    option.innerHTML = city.name;
                    selectCiudad.appendChild(option);
                });
           });
        }
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
        document.getElementById('ciudad_id').addEventListener('change',(e)=>{
            $.get("/sistema-kinder/public/api/city/"+ e.target.value, function(provincias){
                let selectProvincias = document.querySelector("#province_id")
                selectProvincias.innerHTML = "";
                provincias.forEach(provincia => {
                    let option =document.createElement("option");
                    option.setAttribute("value", provincia.id);
                    option.innerHTML = provincia.name;
                    selectProvincias.appendChild(option);
                });
           });
        });
        function previewFoto(event, querySelector){
            const input = event.target;
            $imageFoto = document.querySelector(querySelector);
            if(!input.files.length) return
            file = input.files[0];
            objectURL = URL.createObjectURL(file);
            $imageFoto.src = objectURL; 
        }
        function previewFront(event, querySelector){
            const input = event.target;
            $imageFront = document.querySelector(querySelector);
            if(!input.files.length) return
            file = input.files[0];
            objectURL = URL.createObjectURL(file);
            $imageFront.src = objectURL; 
        }
        function previewPos(event, querySelector){
            const input = event.target;
            $imagePos = document.querySelector(querySelector);
            if(!input.files.length) return
            file = input.files[0];
            objectURL = URL.createObjectURL(file);
            $imagePos.src = objectURL; 
        }
        function previewNac(event, querySelector){
            const input = event.target;
            $imageNac = document.querySelector(querySelector);
            if(!input.files.length) return
            file = input.files[0];
            objectURL = URL.createObjectURL(file);
            $imageNac.src = objectURL; 
        }
    </script>
@stop