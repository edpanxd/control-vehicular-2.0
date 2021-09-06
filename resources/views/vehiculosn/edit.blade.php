@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Editar Vehiculos Nacionales</h1>
@stop

@section('content')
    <form action="/vehiculon/{{ $valores->id }}" method="POST">
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
            <div class="form-group col-md-6">
                <label  class="col-form-label">Numero de Factura:</label>
                <input type="text" class="form-control" name="no_factura" maxlength="20" value="{{$valores->no_factura}}" required>
            </div>
            <div class="form-group col-6 mb-4">
                <label class="col-form-label">Factura</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">PDF</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="archivo_fa" >
                        <label class="custom-file-label">Seleccionar PDF</label>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Refactura:</label>
                <input type="text" class="form-control" name="refactura" maxlength="20" value="{{$valores->refactura}}" required>
            </div>
            <div class="form-group col-6 mb-4">
                <label class="col-form-label">Refactura</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">PDF</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="archivo_refa" >
                        <label class="custom-file-label">Seleccionar PDF</label>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Carta factura:</label>
                <input type="text" class="form-control" name="carta_fa" maxlength="20" value="{{$valores->carta_fa}}" required>
            </div>
            <div class="form-group col-6 mb-4">
                <label class="col-form-label">Carta factura</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">PDF</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="archivo_car" >
                        <label class="custom-file-label">Seleccionar PDF</label>
                    </div>
                </div>
            </div>


        </div>

        <a type="button" href="/vehiculon" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@stop