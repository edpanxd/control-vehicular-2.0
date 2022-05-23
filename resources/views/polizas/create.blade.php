@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
<h1>Registro de Poliza</h1>
@stop

@section('content')
<form action="/poliza" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Vehículo:</label>
            <select class="custom-select select2" id="message-text" name="vehiculo" required>
                <option value=""></option>
                @foreach ($selec as $selec)
                    <option value="{{ $selec->id }}">{{ $selec->marca }}, {{ $selec->serie }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Póliza:</label>
            <input type="text" class="form-control" name="poliza" maxlength="20" required>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Aseguradora:</label>
            <input type="text" class="form-control" name="aseguradora" maxlength="20" required>
        </div>
        <div class="form-group col-6">
            <label  class="col-form-label">Estatus:</label> <br>
            <input type="radio" class="btn-check" name="estatus" id="success-outline" value="VIGENTES" autocomplete="off" required>
            <label class="btn btn-outline-success" for="success-outline">VIGENTES</label>

            <input type="radio" class="btn-check" name="estatus" value="VENCIDAS" id="danger-outline" autocomplete="off" required>
            <label class="btn btn-outline-danger" for="danger-outline">VENCIDAS</label>

            <input type="radio" class="btn-check" name="estatus" value="BAJA" id="info-outline" autocomplete="off" required>
            <label class="btn btn-outline-info" for="info-outline">BAJA</label>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Inicio:</label>
            <input type="date" class="form-control" name="inicio" maxlength="20" required>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Vencimiento:</label>
            <input type="date" class="form-control" name="vencimiento" maxlength="20" required>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Fecha de pago:</label>
            <input type="date" class="form-control" name="fecha_pago" maxlength="20" required>
        </div>

        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Fecha próximo pago:</label>
            <input type="date" class="form-control" name="fecha_estimada" maxlength="20" required>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Monto:</label>
            <input type="number" step="any" class="form-control" name="monto" maxlength="15" required>
        </div>
        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Año:</label>
            <select class="custom-select select2" name="año" required>
                <option value=""></option>
                {{$año=2000}}
                @for($i = 0; $i < 35; $i++)
                 <option value="{{$año}}">{{$año}}</option>
                 {{$año++}}
                @endfor
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="message-text" class="col-form-label">Endoso:</label>
            <select class="custom-select select2"  name="endoso" id="mySelect" onchange="myFunction()"  required>
            <option value=""></option>
            <option value="Si">Si</option>
            <option value="No">No</option>
            </select>
        </div>
        <div class="form-group col-md-6"  id="mostrar" style="display: none">
            <label class="col-form-label">Concepto de Endoso</label>
            <input class="form-control" name="concepto_endoso" id="" cols="30" rows="2">
        </div>
        
        <div class="input-group mb-4 ">
            <div class="input-group-prepend">
                <span class="input-group-text">PDF</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="archivo" >
                <label class="custom-file-label">Seleccionar PDF</label>
            </div>
        </div>
    </div>
    



    <a type="button" href="/poliza" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https:////cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"
        integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
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
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    $('.select2').select2({
        placeholder: 'Seleccione una opcion'
    });
</script>
<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
<script>
    function PrimerS1(params) {
       Command: toastr["info"]("RECUERDA QUE EL FORMATO DE LOS DOCUMENTOS DEBE SER IGUAL PARA TODOS (DOCUMENTOS VERTICALES E INFORMACION VISIBLE)", )
       toastr.options = {
           "closeButton": true,
           "positionClass": "toast-top-right",
           "preventDuplicates": true,
       }
   }
</script>
@stop
