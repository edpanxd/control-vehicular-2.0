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
            <input type="text" class="form-control" name="marca" maxlength="20">
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Submarca:</label>
            <input type="text" class="form-control" name="submarca" maxlength="20">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">tipo:</label>
            <input type="text" class="form-control" name="tipo" maxlength="20">
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">modelo:</label>
            <input type="text" class="form-control" name="modelo" maxlength="20">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">color:</label>
            <input type="text" class="form-control" name="color" maxlength="20">
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">placas:</label>
            <input type="text" class="form-control" name="placas" maxlength="20">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">serie:</label>
            <input type="text" class="form-control" name="serie" maxlength="20">
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Numero de motor:</label>
            <input type="text" class="form-control" name="numeroM"  maxlength="20">
        </div>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Foto de vehiculo</span>
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="imagen">
          <label class="custom-file-label">Seleccionar Foto</label>
        </div>
      </div>
    <a type="button" href="/vehiculo" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
@stop

@section('css')
   
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop