@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Editar Verificación Federal 2° Periodo</h1>
@stop

@section('content')
    <form action="/verificacion_f2/{{ $valores->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf

        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Vehículo:</label>
                <select class="custom-select select2" id="pe" name="vehiculo" required>
                    @foreach ($datos as $datos)
                        <option value="{{ $datos->id_vehiculo }}">{{ $datos->marca }}</option>
                    @endforeach

                    @foreach ($selec as $selec)
                        <option value="{{ $selec->id }}">{{ $selec->marca }}, {{ $selec->serie }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label">Placas:</label>
                <select class="custom-select select2" name="placa" id="" required>
                    <option value="{{ $valores->placa }}">{{ $valores->placa }}</option>
                    @foreach ($selec2 as $selec2)
                        <option value="{{ $selec2->placas }}">{{ $selec2->placas }}</option>
                    @endforeach

                </select>

            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Verificación:</label>
                <input type="number" class="form-control" name="verificacion" maxlength="20"
                    value="{{ $valores->verificacion }}" required>
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
                <input type="number" class="form-control" name="monto" value="{{ $valores->monto }}" maxlength="15" required>
            </div>

            <div class="form-group col-6">
                <label class="col-form-label">Estatus:</label> <br>
                <input type="radio" class="btn-check" name="estatus" id="success-outline" value="Pagado"
                    autocomplete="off" required>
                <label class="btn btn-outline-success" for="success-outline">Pagado</label>
                <input type="radio" class="btn-check" name="estatus" value="Sin pagar" id="danger-outline"
                    autocomplete="off" required>
                <label class="btn btn-outline-danger" for="danger-outline">Sin pagar</label>
            </div>

        </div>

        <a type="button" href="/verificacion_f2" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@stop

@section('js')
    <script>
        console.log('Hi!');
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
