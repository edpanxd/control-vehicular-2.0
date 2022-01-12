@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Registro de tenencias</h1>
@stop

@section('content')
    <form action="/tenencia" method="POST" enctype="multipart/form-data">
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
                <label for="message-text" class="col-form-label">Fecha de pago:</label>
                <input type="date" class="form-control" name="fecha_pago" maxlength="20" required>
            </div>

            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Fecha próximo pago:</label>
                <input type="date" class="form-control" name="fecha_estimada" maxlength="20" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Monto:</label>
                <input type="number" class="form-control" name="monto" maxlength="15" required>
            </div>
            <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Año:</label>
                <input type="number" class="form-control" name="año" maxlength="4" required>
            </div>

        

        <div class="form-group col-6">
            <label class="col-form-label">Estatus:</label> <br>
            <input type="radio" class="btn-check" name="estatus" id="success-outline" value="Pagado" autocomplete="off"
                required>
            <label class="btn btn-outline-success" for="success-outline">Pagado</label>
            <input type="radio" class="btn-check" name="estatus" value="Sin pagar" id="danger-outline" autocomplete="off"
                required>
            <label class="btn btn-outline-danger" for="danger-outline">Sin pagar</label>
        </div>
        <div class="input-group mb-4 ">
            <div class="input-group-prepend">
                <span class="input-group-text">PDF</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" onclick="PrimerS1()" name="archivo" required>
                <label class="custom-file-label">Seleccionar PDF</label>
            </div>
        </div>
    </div>

        <a type="button" href="/tenencia" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
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
        $('.select2').select2({
            placeholder: 'Seleccione un vehículo'
        });
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
 <script>
    function PrimerS1(params) {
       Command: toastr["info"]("RECUERDA QUE EL FORMATO DE LOS DOCUEMNTOS DEBE SER IGUAL PARA TODOS (DOCUMENTOS VERTICALES E INFORMACION VISIBLE)", )
       toastr.options = {
           "closeButton": true,
           "positionClass": "toast-top-right",
           "preventDuplicates": true,
       }
   }
</script>
@stop
