@extends('adminlte::page')

@section('title', 'Empresa')

@section('content_header')
    <h1>Editar Empresa</h1>
@stop

@section('content')
    <form action="/empresa/{{ $valores->id }}" method="POST">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">Empresa:</label>
                <input type="text" class="form-control" name="empresa" value="{{ $valores->empresa }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">RFC:</label>
                <input type="text" class="form-control" name="rfc" value="{{ $valores->rfc }}" required>
            </div>
        </div>
      
        <a type="button" href="/empresa" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
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
@stop
