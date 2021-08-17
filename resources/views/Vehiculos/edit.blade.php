@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Editar vehiculo</h1>
@stop

@section('content')
    <form action="/vehiculo/{{ $valores->id }}" method="POST">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">Marca:</label>
                <input type="text" class="form-control" name="marca" value="{{ $valores->marca }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Submarca:</label>
                <input type="text" class="form-control" name="submarca" value="{{ $valores->submarca }}" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">tipo:</label>
                <input type="text" class="form-control" name="tipo" value="{{ $valores->tipo }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">modelo:</label>
                <input type="text" class="form-control" name="modelo" value="{{ $valores->modelo }}" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">color:</label>
                <input type="text" class="form-control" name="color" value="{{ $valores->color }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">placas:</label>
                <input type="text" class="form-control" name="placas" value="{{ $valores->placas }}" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">serie:</label>
                <input type="text" class="form-control" name="serie" value="{{ $valores->serie }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Numero de motor:</label>
                <input type="text" class="form-control" name="numeroM" value="{{ $valores->numeroM }}" required>
            </div>
        </div>
        <a type="button" href="/vehiculo" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
