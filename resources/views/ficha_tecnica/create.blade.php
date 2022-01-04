@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Registrar Ficha Técnica</h1>
@stop

@section('content')
    <form action="/ficha_tecnica" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-12">
                <label for="vehiculo" class="col-form-label">Vehículo:</label>
                <select class="custom-select select2" id="vehiculo" name="vehiculo" required>
                    <option value=""></option>
                    @foreach ($selec as $selec)
                        <option value="{{ $selec->id }}">{{ $selec->marca }}, {{ $selec->serie }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Rendimiento del Conbustible:</label>
                <input type="number" class="form-control" name="rendimientoConbustible" maxlength="12" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Capacidad de Caja</label>
                <input type="number" class="form-control" name="CapacidadCaja" maxlength="12" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Largo de Caja</label>
                <input type="number" class="form-control" name="LargoCaja" maxlength="12" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Ancho de Caja</label>
                <input type="number" class="form-control" name="AnchoCaja" maxlength="12" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Alto de Caja</label>
                <input type="number" class="form-control" name="AltoCaja" maxlength="12" required>
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
    <script>
        $('.select2').select2({
            placeholder: 'Seleccione una opcion'
        });
    </script>
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
