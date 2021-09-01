@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Registro de Verificación Federal</h1>
@stop

@section('content')
    <form action="/verificacion_f" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="vehiculo" class="col-form-label">Vehículo:</label>
                <select class="custom-select select2" id="vehiculo" name="vehiculo" required>
                    <option value=""></option>
                    @foreach ($selec as $selec)
                        <option value="{{ $selec->id }}">{{ $selec->marca }}, {{ $selec->serie }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label  class="col-form-label">Placas:</label>
                <select class="custom-select select2" name="placa" id="" required>
                    <option value=""></option>
                    @foreach($selec2 as $selec2)
                    <option value="{{$selec2->placas}}">{{$selec2->placas}}</option>
                    @endforeach
                
                </select>
                
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Verificación:</label>
                <input type="text" class="form-control" name="verificacion" maxlength="20" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Fecha:</label>
                <input type="date" class="form-control" name="fecha" maxlength="20" required>
            </div>


            <div class="form-group col-6">
                <label class="col-form-label">Estatus:</label> <br>
                <input type="radio" class="btn-check" name="estatus" id="success-outline" value="Pagado" autocomplete="off"
                    required>
                <label class="btn btn-outline-success" for="success-outline">Pagado</label>
                <input type="radio" class="btn-check" name="estatus" value="Sin pagar" id="danger-outline"
                    autocomplete="off" required>
                <label class="btn btn-outline-danger" for="danger-outline">Sin pagar</label>
            </div>

            <div class="input-group mb-4 ">
                <div class="input-group-prepend">
                    <span class="input-group-text">PDF</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="archivo" required>
                    <label class="custom-file-label">Seleccionar PDF</label>
                </div>
            </div>

        </div>
    
        <a type="button" href="/verificacion_f" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@stop

@section('js')
<script>
    $('.select2').select2({
        placeholder: 'Seleccione un vehículo'
    });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop
