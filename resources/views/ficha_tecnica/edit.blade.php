@extends('adminlte::page')

@section('title', 'Ficha Tecnica')

@section('content_header')
    <h1>Editar Ficha Técnica</h1>
@stop

@section('content')
    <form action="/ficha_tecnica/{{ $valores->id }}" method="POST"  enctype="multipart/from-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group col-md-12">
                <label for="vehiculo" class="col-form-label">Vehículo:</label>
                <select class="custom-select select2" id="vehiculo" name="vehiculo" required>
                    @foreach ($datos as $datos)
                        <option value="{{ $datos->id_vehiculo }}">{{ $datos->marca }}, {{$datos->serie}}</option>
                    @endforeach
                    @foreach ($selec as $selec)
                    @if($datos->id_vehiculo !=$selec->id)
                    <option value="{{ $selec->id }}">{{ $selec->marca }}, {{ $selec->serie }} </option>
                    @endif
                        
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Rendimiento del Conbustible:</label>
                <input type="number" class="form-control" name="rendimientoConbustible" maxlength="12" value="{{$valores->rendimientoConbustible}}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Capacidad de Caja</label>
                <input type="number" class="form-control" name="CapacidadCaja" maxlength="12" value="{{$valores->CapacidadCaja}}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Largo de Caja</label>
                <input type="number" class="form-control" name="LargoCaja" maxlength="12" value="{{$valores->LargoCaja}}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Ancho de Caja</label>
                <input type="number" class="form-control" name="AnchoCaja" maxlength="12" value="{{$valores->AnchoCaja}}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Alto de Caja</label>
                <input type="number" class="form-control" name="AltoCaja" maxlength="12" value="{{$valores->AltoCaja}}" required>
            </div>
        </div>

        <a type="button" href="/ficha_tecnica" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
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
    <script>
        $('.select2').select2({
            placeholder: 'Seleccione una opcion'
        });
    </script>
@stop
