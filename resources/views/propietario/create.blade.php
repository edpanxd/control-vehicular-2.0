@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Registrar Propietario anterior</h1>
@stop

@section('content')
    <form action="/propietario" method="POST" enctype="multipart/form-data">
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
                <label for="message-text" class="col-form-label">Vendedor:</label>
                <input type="text" class="form-control" name="vendedor" maxlength="20" required>
            </div>
            <div class="form-group col-6 mb-4">
                <label class="col-form-label">Identificacion Vendedor</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">PDF</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="ide_ven" >
                        <label class="custom-file-label">Seleccionar PDF</label>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Comprador:</label>
                <input type="text" class="form-control" name="comprador" maxlength="20" required>
            </div>
            <div class="form-group col-6 mb-4">
                <label class="col-form-label">Identificacion Comprador</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">PDF</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="ide_com" >
                        <label class="custom-file-label">Seleccionar PDF</label>
                    </div>
                </div>
            </div>

        </div>

        <a type="button" href="/propietario" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
    <script>
        $('.select2').select2({
            placeholder: 'Seleccione una opcion'
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@stop
