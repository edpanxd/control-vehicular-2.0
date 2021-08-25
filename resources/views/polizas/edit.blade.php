@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
<h1>Registro de Poliza</h1>
@stop

@section('content')
<form action="/poliza/{{ $valores->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="row">
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Vehículo:</label>
            <select class="custom-select" id="message-text" name="vehiculo" required>
                @foreach ($datos as $datos)
                    <option value="{{ $datos->id_vehiculo }}">{{ $datos->marca }}</option>
                @endforeach
                @foreach ($selec as $selec)
                    <option value="{{ $selec->id }}">{{ $selec->marca }}, {{ $selec->placas }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Póliza:</label>
            <input type="text" class="form-control" name="poliza" maxlength="20" value="{{ $valores->poliza }}"
                required>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Seguro:</label>
            <input type="text" class="form-control" name="seguro" maxlength="20" value="{{ $valores->seguro }}"
                required>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Vigencia:</label>
            <input type="date" class="form-control" name="vigencia" maxlength="20" value="{{ $valores->vigencia }}"
                required>
        </div>
        <div class="form-group col-6">
            <label  class="col-form-label">Estatus:</label> <br>
            <input type="radio" class="btn-check" name="estatus" id="success-outline" value="vigentes" autocomplete="off" required>
            <label class="btn btn-outline-success" for="success-outline">Vigentes</label>

            <input type="radio" class="btn-check" name="estatus" value="vencidas" id="danger-outline" autocomplete="off" required>
            <label class="btn btn-outline-danger" for="danger-outline">Vencidas</label>

            <input type="radio" class="btn-check" name="estatus" value="baja" id="info-outline" autocomplete="off" required>
            <label class="btn btn-outline-info" for="info-outline">Dadas de baja</label>
          </div>
    </div>

    <a type="button" href="/poliza" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
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
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop
