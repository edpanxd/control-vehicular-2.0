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
                <label for="message-text" class="col-form-label">Tipo:</label>
                <select class="custom-select select2" id="" name="tipo" required>
                    <option value=""></option>
                   <option value="AUTOMÓVIL">AUTOMÓVIL</option>
                   <option value="CAMIÓN">CAMIÓN</option>
                   <option value="CAJA">CAJA</option>
                   <option value="CAMIONETA">CAMIONETA</option>
                   <option value="TRÁILER">TRÁILER</option>
                   <option value="REMOLQUE">REMOLQUE</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Modelo:</label>
                <input type="text" class="form-control" name="modelo" maxlength="20" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Color:</label>
                <input type="text" class="form-control" name="color" maxlength="20" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Serie:</label>
                <input type="text" class="form-control" name="serie" maxlength="20" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Numero de motor:</label>
                <input type="text" class="form-control" name="numeroM" maxlength="20" required>
            </div>
            <div class="form-group col-6">
                <label class="col-form-label">Estatus:</label> <br>
                <input type="radio" class="btn-check" name="estatus" id="success-outline" value="Activo" autocomplete="off"
                    required>
                <label class="btn btn-outline-success" for="success-outline">Activo</label>
                <input type="radio" class="btn-check" name="estatus" value="No Activo" id="danger-outline"
                    autocomplete="off" required>
                <label class="btn btn-outline-danger" for="danger-outline">No activo</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="" class="col-form-label" >Uso:</label>
                <select class="custom-select select2" id="propietario" onchange="myFunction()" name="uso" required>
                    <option value=""></option>
                   <option value="PARTICULAR">PARTICULAR</option>
                   <option value="CARGA">CARGA</option>
                </select>
            </div>
            <div class="form-group col-md-6" id="mostrar" style="display: none">
                <label for="message-text"  class="col-form-label">Nombre de propietario:</label>
                <input type="text" class="form-control" name="nombre_p" maxlength="20" >
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Adquisicion:</label>
                <select class="custom-select select2" id="" name="adquisicion" required>
                    <option value=""></option>
                   <option value="NUEVO">NUEVO</option>
                   <option value="USADO">USADO</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Empresa:</label>
                <select class="custom-select select2" id="" name="empresa" required>
                    <option value=""></option>
                    @foreach($empresa as $empresa)
                    <option value="{{$empresa->empresa}}">{{$empresa->empresa}}</option>
                    @endforeach
                   
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Localidad:</label>
                <select class="custom-select select2" id="" name="localidad" required>
                    <option value=""></option>
                    @foreach($localidad as $localidad)
                    <option value="{{$localidad->localidad}}">{{$localidad->localidad}}</option>
                    @endforeach
                   
                </select>
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
    <footer>
        <br>
        <br>
    </footer>
@stop

@section('css')
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
<script>
    function myFunction() {
        var x = document.getElementById("propietario").value;

        if (x == "PARTICULAR") {
            document.getElementById("mostrar").style.display = "inline"

        } else {
            document.getElementById("mostrar").style.display = "none"
        }

    }
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
