@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Editar Documentos</h1>
@stop

@section('content')
    <form action="/documento/{{ $valores->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="form-group col-md-12">
                <label for="vehiculo" class="col-form-label">Vehículo:</label>
                <select class="custom-select select2" id="vehiculo" name="vehiculo" required>
                    @foreach ($datos as $datos)
                        <option value="{{ $datos->id_vehiculo }}">{{ $datos->marca }}</option>
                    @endforeach
                    @foreach ($selec as $selec)
                        <option value="{{ $selec->id }}">{{ $selec->marca }}, {{ $selec->serie }} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Nombre del comprador:</label>
                <input type="text" class="form-control" name="comprador" maxlength="50" value="{{$datos->comprador}}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Nombre del vendedor:</label>
                <input type="text" class="form-control" name="vendedor" maxlength="50" value="{{$datos->vendedor}}" required>
            </div>
            <!--///////-->
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Contrato de compraventa:</label>
                <select class="custom-select " id="mySelect"  name="contrato_com" required>
                    <option value="{{$datos->contrato_com}}">{{$datos->contrato_com}}</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group col-md-6" id="mostrar" >
                <label for="message-text" class="col-form-label">Contrato de compraventa:</label>
                <div class="input-group mb-4 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">PDF</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="archivo_con">
                        <label class="custom-file-label">Seleccionar PDF</label>
                    </div>
                </div>
            </div>
            <!--///////-->
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Carta responsiva:</label>
                <select class="custom-select " id="mySelect2" name="carta_res" required>
                    <option value="{{$datos->carta_res}}">{{$datos->carta_res}}</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group col-md-6" id="mostrar2" >
                <label for="message-text" class="col-form-label">Carta responsiva:</label>
                <div class="input-group mb-4 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">PDF</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="archivo_car">
                        <label class="custom-file-label">Seleccionar PDF</label>
                    </div>
                </div>
            </div>
            <!--///////-->
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Identificacion del vendedor:</label>
                <select class="custom-select" id="mySelect3"  name="identificacion" required>
                    <option value="{{$datos->identificacion}}">{{$datos->identificacion}}</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group col-md-6" id="mostrar3" >
                <label for="message-text" class="col-form-label">Identificacion del vendedor:</label>
                <div class="input-group mb-4 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">PDF</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="archivo_iden">
                        <label class="custom-file-label">Seleccionar PDF</label>
                    </div>
                </div>
            </div>
            <!--///////-->
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Informe repuve:</label>
                <select class="custom-select " id="mySelect4" name="informe" required>
                    <option value="{{$datos->informe}}">{{$datos->informe}}</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group col-md-6" id="mostrar4" >
                <label for="message-text" class="col-form-label">Informe repuve:</label>
                <div class="input-group mb-4 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">PDF</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="archivo_in">
                        <label class="custom-file-label">Seleccionar PDF</label>
                    </div>
                </div>
            </div>
            <!--///////-->
        </div>

        <a type="button" href="/documento" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
@stop

@section('js')
<!-- 
    <script>
        function myFunction() {
            var x = document.getElementById("mySelect").value;

            if (x == "Si") {
                document.getElementById("mostrar").style.display = "inline"

            } else {
                document.getElementById("mostrar").style.display = "none"
            }

        }
    </script>
    <script>
        function myFunction2() {
            var y = document.getElementById("mySelect2").value;

            if (y == "Si") {
                document.getElementById("mostrar2").style.display = "inline"

            } else {
                document.getElementById("mostrar2").style.display = "none"
            }

        }
    </script>
    <script>
        function myFunction3() {
            var z = document.getElementById("mySelect3").value;

            if (z == "Si") {
                document.getElementById("mostrar3").style.display = "inline"

            } else {
                document.getElementById("mostrar3").style.display = "none"
            }

        }
    </script>
    <script>
        function myFunction4() {
            var i = document.getElementById("mySelect4").value;

            if (i == "Si") {
                document.getElementById("mostrar4").style.display = "inline"

            } else {
                document.getElementById("mostrar4").style.display = "none"
            }

        }
    </script>
-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@stop
