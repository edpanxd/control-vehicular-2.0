@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Editar Tarjetas de circulación</h1>
@stop

@section('content')
    <form action="/tarjeta/{{ $valores->id }}" method="POST">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="vehiculo" class="col-form-label">Vehículo:</label>
                <select class="custom-select select2" id="vehiculo" name="vehiculo" required>
                    @foreach($datos as $datos)
                    <option value="{{$datos->id_vehiculo}}">{{$datos->marca}}</option>
                    @endforeach
                    @foreach ($selec as $selec)
                        <option value="{{ $selec->id }}">{{ $selec->marca }}, {{ $selec->serie }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label">Placas:</label>
                <select class="custom-select select2" name="placa" id="" required>
                    <option value="{{$valores->placas}}">{{$valores->placas}}</option>
                    @foreach ($selec2 as $selec2)
                        <option value="{{ $selec2->placas }}">{{ $selec2->placas }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Inicio:</label>
                <input type="date" class="form-control" name="inicio" maxlength="20" value="{{$valores->inicio}}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Vencimiento:</label>
                <input type="date" class="form-control" name="vencimiento" maxlength="20" value="{{$valores->vencimiento}}"required>
            </div>
            <div class="form-group col-6">
                <label class="col-form-label">Estatus:</label> <br>
                <input type="radio" class="btn-check" name="estatus" id="success-outline" value="Vigente"
                    autocomplete="off" required>
                <label class="btn btn-outline-success" for="success-outline">Vigente</label>
                <input type="radio" class="btn-check" name="estatus" value="Vencida" id="danger-outline"
                    autocomplete="off" required>
                <label class="btn btn-outline-danger" for="danger-outline">Vencida</label>
            </div>
        
        </div>
      
        <a type="button" href="/tarjeta" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
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
