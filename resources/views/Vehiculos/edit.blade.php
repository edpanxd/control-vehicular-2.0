@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Editar vehiculo</h1>
@stop

@section('content')
    <form action="/vehiculo/{{ $valores->id }}" method="POST">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">Marca:</label>
                <input type="text" class="form-control" name="marca" value="{{ $valores->marca }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Submarca:</label>
                <input type="text" class="form-control" name="submarca" value="{{ $valores->submarca }}" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Tipo:</label>
                <select class="custom-select select2" id="" name="tipo" required>
                    <option value="{{ $valores->tipo }}">{{ $valores->tipo }}</option>
                    <option value="Automóvil">Automóvil</option>
                    <option value="Camíon">Camíon</option>
                    <option value="Caja">Caja</option>
                    <option value="Camioneta">Camioneta</option>
                    <option value="Trailer">Trailer</option>
                    <option value="Remolque">Remolque</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Modelo:</label>
                <input type="text" class="form-control" name="modelo" value="{{ $valores->modelo }}" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Color:</label>
                <input type="text" class="form-control" name="color" value="{{ $valores->color }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Serie:</label>
                <input type="text" class="form-control" name="serie" value="{{ $valores->serie }}" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Numero de motor:</label>
                <input type="text" class="form-control" name="numeroM" value="{{ $valores->numeroM }}" required>
            </div>
            <div class="form-group col-6">
                <label class="col-form-label">Estatus:</label> <br>
                <input type="radio" class="btn-check" name="estatus" id="success-outline" value="Activo" autocomplete="off"
                    required>
                <label class="btn btn-outline-success" for="success-outline">Activo</label>
                <input type="radio" class="btn-check" name="estatus" value="No Activo" id="danger-outline"
                    autocomplete="off" required>
                <label class="btn btn-outline-danger" for="danger-outline">No activo</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="" class="col-form-label">Uso:</label>
                <select class="custom-select select2" id="" name="uso" required>
                    <option value="{{$valores->uso}}">{{$valores->uso}}</option>
                    <option value="Particular">Particular</option>
                    <option value="Carga">Carga</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Adquisicion:</label>
                <select class="custom-select select2" id="" name="adquisicion" required>
                    <option value="{{$valores->adquisicion}}">{{$valores->adquisicion}}</option>
                    <option value="Nuevo">Nuevo</option>
                    <option value="Usado">Usado</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label for="message-text" class="col-form-label">Empresa:</label>
                <select class="custom-select select2" id="" name="empresa" required>
                    <option value="{{$valores->empresa}}">{{$valores->empresa}}</option>
                    @foreach($empresa as $empresa)
                    <option value="{{$empresa->empresa}}">{{$empresa->empresa}}</option>
                    @endforeach
                   
                </select>
            </div>
        </div>
        <a type="button" href="/vehiculo" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@stop
