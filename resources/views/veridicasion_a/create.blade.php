@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Registro de placas</h1>
@stop

@section('content')
    <form action="/placa" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Vehiculo:</label>
                <select class="custom-select" id="message-text" name="vehiculo" required>
                    <option disabled selected>Selecciona el vehiculo</option>
                    @foreach ($selec as $selec)
                        <option value="{{ $selec->id }}">{{ $selec->marca }}, {{ $selec->placas }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Vencimiento:</label>
                <input type="date" class="form-control" name="vencimiento" maxlength="20" required>
            </div>
        </div>
      
            <div class="form-group col-6" >
            <label  class="col-form-label">Estatus:</label> <br>
            <input type="radio" class="btn-check" name="estatus" id="success-outline" value="vigentes" autocomplete="off" required>
            <label class="btn btn-outline-success" for="success-outline">Vigentes</label>
            <input type="radio" class="btn-check" name="estatus" value="vencidas" id="danger-outline" autocomplete="off" required>
            <label class="btn btn-outline-danger" for="danger-outline">vencidas</label>
          </div>
          <div class="form-group ">
            <label for="message-text" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" maxlength="20" required>
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
    
        <a type="button" href="/placa" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop
