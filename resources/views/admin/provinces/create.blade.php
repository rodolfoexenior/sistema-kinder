@extends('adminlte::page')

@section('title', 'Provincia')

@section('content_header')
    <h1 class="m-0 text-dark">Crear provincia</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.provinces.store']) !!}
                    <div class="form-group">
                        {!! Form::label('country_id', 'País de origen') !!}
                        </br>
                        <select class="form-control" name="country_id" id="country_id" onchange="showCities(this.value)">
                            <option value="">Seleccione el país</option>
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::label('city_id', 'Ciudad') !!}
                    </br>
                        <select class="form-control" name="city_id" id="city_id">
                        </select>
                    </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Nombres') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingresar el nombre de la provincia']) !!}
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
 
                            {!! Form::submit('Crear provincia', ['class' =>'btn btn-primary btn-lg']) !!}
                   
                        
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