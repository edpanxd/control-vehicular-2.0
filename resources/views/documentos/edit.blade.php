@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Editar Documentos</h1>
@stop

@section('content')
    <form action="/documento/{{ $valores->id }}" method="POST" enctype="multipart/from-data">
        @method('put')
        @csrf
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
