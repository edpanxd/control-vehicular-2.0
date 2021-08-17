@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
<h1>Bienvenido</h1>
@stop

@section('content')
<form action="/vehiculo" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            <label for="recipient-name" class="col-form-label">Marca:</label>
            <input type="text" class="form-control" name="marca" maxlength="20" required>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Submarca:</label>
            <input type="text" class="form-control" name="submarca" maxlength="20" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">tipo:</label>
            <input type="text" class="form-control" name="tipo" maxlength="20" required>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">modelo:</label>
            <input type="text" class="form-control" name="modelo" maxlength="20" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">color:</label>
            <input type="text" class="form-control" name="color" maxlength="20" required>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">placas:</label>
            <input type="text" class="form-control" name="placas" maxlength="20" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">serie:</label>
            <input type="text" class="form-control" name="serie" maxlength="20" required>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Numero de motor:</label>
            <input type="text" class="form-control" name="numeroM"  maxlength="20" required>
        </div>
        <div class="form-group col-6" >
            <label  class="col-form-label">Estatus:</label> <br>
            <input type="radio" class="btn-check" name="estatus" id="success-outline" value="Activo" autocomplete="off" required>
            <label class="btn btn-outline-success" for="success-outline">Activo</label>
            <input type="radio" class="btn-check" name="estatus" value="No Activo" id="danger-outline" autocomplete="off" required>
            <label class="btn btn-outline-danger" for="danger-outline">No activo</label>
          </div>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Foto de vehiculo</span>
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="imagen" required>
          <label class="custom-file-label">Seleccionar Foto</label>
        </div>
      </div>
    <a type="button" href="/vehiculo" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop