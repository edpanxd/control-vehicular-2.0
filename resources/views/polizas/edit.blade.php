@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Editar Poliza</h1>
@stop

@section('content')
    <form action="/poliza/{{ $valores->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Vehículo:</label>
                <select class="custom-select select2" id="message-text" name="vehiculo" required>
                    @foreach ($datos as $datos)
                        <option value="{{ $datos->id_vehiculo }}">{{ $datos->marca }}, {{$datos->serie}}</option>
                    @endforeach
                    @foreach ($selec as $selec)
                        @if ($datos->id_vehiculo ==  $selec->id )
                            
                        @else
                        <option value="{{ $selec->id }}">{{ $selec->marca }}, {{ $selec->serie }} </option> 
                        @endif
                      
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Póliza:</label>
                <input type="text" class="form-control" name="poliza" maxlength="20" value="{{ $valores->poliza }}"
                    required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Aseguradora:</label>
                <input type="text" class="form-control" name="aseguradora" maxlength="20" value="{{$valores->aseguradora}}" required>
            </div>
            <div class="form-group col-6">
                <label class="col-form-label">Estatus:</label> <br>
                <input type="radio" class="btn-check" name="estatus" id="success-outline" value="VIGENTES"
                    autocomplete="off" required>
                <label class="btn btn-outline-success" for="success-outline">VIGENTES</label>

                <input type="radio" class="btn-check" name="estatus" value="VENCIDAS" id="danger-outline" autocomplete="off"
                    required>
                <label class="btn btn-outline-danger" for="danger-outline">VENCIDAS</label>

                <input type="radio" class="btn-check" name="estatus" value="BAJA" id="info-outline" autocomplete="off"
                    required>
                <label class="btn btn-outline-info" for="info-outline">BAJA</label>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Inicio:</label>
                <input type="date" class="form-control" name="inicio" maxlength="20" value="{{$valores->inicio}}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Vencimiento:</label>
                <input type="date" class="form-control" name="vencimiento" maxlength="20" value="{{$valores->vencimiento}}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Endoso:</label>
                <select class="custom-select select2" name="endoso" id="mySelect" onchange="myFunction()" required>
                    <option value="{{$valores->endoso}}">{{$valores->endoso}}</option>
                    @if ($valores->endoso == "No")
                    <option value="Si">Si</option>  
                    @else
                    <option value="No">No</option>
                    @endif
                    
                    
                </select>
            </div>
            <div class="form-group col-md-6" id="mostrar" style="display: none">
                <label class="col-form-label">Concepto de Endoso</label>
                <input type="text" class="form-control" name="concepto_endoso" value="{{$valores->concepto_endoso}}" id="" cols="30" rows="2">
            </div>

        </div>

        <a type="button" href="/poliza" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
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
