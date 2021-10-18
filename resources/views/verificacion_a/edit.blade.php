@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Editar Verificacion A</h1>
@stop

@section('content')
    <form action="/verificacion_a/{{ $valores->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Vehículo:</label>
                <select class="custom-select select2" id="pe" name="vehiculo" required>
                    @foreach ($datos as $datos)
                        <option value="{{ $datos->id_vehiculo }}">{{ $datos->marca }}, {{$datos->serie}}</option>
                    @endforeach

                    @foreach ($selec as $selec)
                    @if ($datos->id_vehiculo != $selec->id )
                    <option value="{{ $selec->id }}">{{ $selec->marca }}, {{ $selec->serie }} </option>                    
                    @endif
                       
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label  class="col-form-label">Placas:</label>
                <select class="custom-select select2" name="placa" id="" required>
                    <option value="{{$valores->placa}}">{{$valores->placa}}</option>
                    @foreach($selec2 as $selec2)
                    <option value="{{$selec2->placas}}">{{$selec2->placas}}</option>
                    @endforeach
                
                </select>
                
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label">Engomado:</label>
                <select class="custom-select" name="engomado" style="font-size:15pt" required>
                    <option value=""></option>
                    <option value="5 u 6" style="background-color:rgba(247,255,23,1) "> 5 u 6 <a></a></option>
                    <option value="7 u 8" style="background-color:rgba(255,64,217,1)">7 u 8</option>
                    <option value="3 o 4" style="background-color:rgba(255,3,3,1)">3 o 4</option>
                    <option value="1 o 2" style="background-color: rgba(6,179,0,1)">1 o 2</option>
                    <option value="9 o 0" style="background-color: rgba(0,187,255,1)">9 o 0</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Verificación:</label>
                <input type="text" class="form-control" name="verificacion" maxlength="20" value="{{$valores->verificacion}}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Fecha:</label>
                <input type="date" class="form-control" name="fecha" maxlength="20" value="{{$valores->fecha}}" required>
            </div>


            <div class="form-group col-6">
                <label class="col-form-label">Estatus:</label> <br>
                <input type="radio" class="btn-check" name="estatus" id="success-outline" value="Pagado" autocomplete="off"
                    required>
                <label class="btn btn-outline-success" for="success-outline">Pagado</label>
                <input type="radio" class="btn-check" name="estatus" value="Sin pagar" id="danger-outline"
                    autocomplete="off" required>
                <label class="btn btn-outline-danger" for="danger-outline">Sin pagar</label>
            </div>

        </div>

        <a type="button" href="/verificacion_a" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@stop

@section('js')
    
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        $('.select2').select2({
            placeholder: 'Seleccione su opción'
        });
    </script>
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@stop
