@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Editar Vehiculos importados</h1>
@stop

@section('content')
    <form action="/vehiculoi/{{ $valores->id }}" method="POST"  enctype="multipart/from-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group col-md-12">
                <label for="vehiculo" class="col-form-label">Vehículo:</label>
                <select class="custom-select select2" id="vehiculo" name="vehiculo" required>
                    @foreach ($datos as $datos)
                        <option value="{{ $datos->id_vehiculo }}">{{ $datos->marca }}</option>
                    @endforeach
                    @foreach ($selec as $selec)
                        <option value="{{ $selec->id }}">{{ $selec->marca }}, {{ $selec->serie }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-8">
                <label  class="col-form-label">Numero de Factura:</label>
                <input type="text" class="form-control" name="no_factura" maxlength="20" value="{{$valores->no_factura}}" required>
            </div>
           
            <div class="form-group col-md-8">
                <label for="message-text" class="col-form-label">Pedimiento:</label>
                <input type="text" class="form-control" name="pedimiento" maxlength="20" value="{{$valores->pedimiento}}" required>
            </div>
        
            <div class="form-group col-md-8">
                <label for="message-text" class="col-form-label">Titulo de propietario:</label>
                <input type="text" class="form-control" name="titulo_pro" maxlength="20" value="{{$valores->titulo_pro}}" required>
            </div>
           


        </div>

        <a type="button" href="/vehiculoi" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
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
