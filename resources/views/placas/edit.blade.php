@extends('adminlte::page')

@section('title', 'Placas')

@section('content_header')
    <h1>Editar de placas</h1>
@stop

@section('content')
    <form action="/placa/{{ $valores->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Vehículo:</label>
                <select class="custom-select select2" id="pe" name="vehiculo" required>
                    @foreach ($datos as $datos)
                        <option value="{{ $datos->id_vehiculo }}">{{ $datos->id_vehiculo }}, {{ $datos->marca }}, {{ $datos->serie }}</option>
                    @endforeach
                    @foreach ($selec as $selec)
                        @if ($datos->id_vehiculo == $selec->id)

                        @else
                            <option value="{{ $selec->id }}">{{ $selec->id }}, {{ $selec->marca }}, {{ $selec->serie }} </option>
                        @endif

                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Placa:</label>
                <input type="text" class="form-control" name="placas" maxlength="20" value="{{ $valores->placas }}"
                    required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Entidad:</label>
                <select class="custom-select select2" id="" name="entidad" required>
                    <option value="{{ $valores->entidad }}">{{ $valores->entidad }}</option>
                    <option value="CDMX">CDMX</option>
                    <option value="EDO.MEX">EDO.MEX</option>
                    <option value="FEDERAL">FEDERAL</option>
                    <option value="OTRO">OTRO</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Vencimiento:</label>
                <input type="date" class="form-control" name="vencimiento" maxlength="20"
                    value="{{ $valores->vencimiento }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Alta:</label>
                <input type="date" class="form-control" name="alta" maxlength="20" value="{{ $valores->alta }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Baja:</label>
                <input type="date" class="form-control" name="baja" value="{{ $valores->baja }}" maxlength="20" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Fecha de pago:</label>
                <input type="date" class="form-control" name="fecha_pago" value="{{ $valores->fecha_pago }}" maxlength="20" required>
            </div>

            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Fecha próximo pago:</label>
                <input type="date" class="form-control" name="fecha_estimada" value="{{ $valores->fecha_estimada }}" maxlength="20" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Monto:</label>
                <input type="number" step="any" class="form-control" name="monto" value="{{ $valores->monto }}" maxlength="15" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Año:</label>   
                <select class="custom-select select2" name="año" required>
                    <option value="{{ $valores->año }}">{{ $valores->año }}</option>
                    {{$año=2000}}
                    @for($i = 0; $i < 35; $i++)
                     <option value="{{$año}}">{{$año}}</option>
                     {{$año++}}
                    @endfor
                    
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label class="col-form-label">Estatus:</label> <br>
                <input type="radio" class="btn-check" name="estatus" id="success-outline" value="VIGENTES"
                    autocomplete="off" required>
                <label class="btn btn-outline-success" for="success-outline">VIGENTES</label>

                <input type="radio" class="btn-check" name="estatus" value="VENCIDAS" id="danger-outline"
                    autocomplete="off" required>
                <label class="btn btn-outline-danger" for="danger-outline">VENCIDAS</label>

                <input type="radio" class="btn-check" name="estatus" value="BAJA" id="info-outline" autocomplete="off"
                    required>
                <label class="btn btn-outline-info" for="info-outline">BAJA</label>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Cambio de propietario:</label>
                <select class="custom-select select2" id="mySelect" onchange="myFunction()" name="cambio_propietario"
                    required>
                    <option value=""></option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group col-md-6" id="mostrar" style="display: none">
                <label for="message-text" class="col-form-label">Fecha de cambio de propietario:</label>
                <input type="date" class="form-control" name="fecha_cambio_p" value="{{ $valores->fecha_cambio_p }}"
                    maxlength="20">
            </div>
            <div class="form-group ">
                <label for="message-text" class="col-form-label">Observaciones:</label>
                <input type="text" class="form-control" name="observaciones" maxlength="55"
                    value="{{ $valores->observaciones }}" required>
            </div>
            <div class="input-group mb-4 ">
                <div class="input-group-prepend">
                    <span class="input-group-text">PDF</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" onclick="PrimerS1()" name="archivo">
                    <label class="custom-file-label">Seleccionar PDF</label>
                </div>
            </div>
        </div>

        <a type="button" href="/placa" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@stop

@section('js')
    <script>
        $('.select2').select2({
            placeholder: 'Seleccione una opcion'
        });
    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("mySelect").value;

            if (x == "Si") {
                document.getElementById("mostrar").style.display = "inline"
                console.log("cambio")
            } else {
                document.getElementById("mostrar").style.display = "none"
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
