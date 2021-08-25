@extends('adminlte::page')

@section('title', 'Tenencias')

@section('content_header')
<h1>Tenencia</h1>
@stop

@section('content')
<a class="btn btn-primary mb-3" href="tenencia/create">Registrar Tenencia </a>
<div class="table-responsive">


    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Vehículo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tenencia</th>
                <th scope="col">Pago</th>
                <th scope="col">Estatus</th>
                <th scope="col">PDF</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
                <tr>
                    <th>{{ $data->id }}</th>
                    <th>{{ $data->marca }}</th>
                    <th>{{ $data->serie }}</th>
                    <th>{{ $data->tenencia }}</th>
                    <th>{{ $data->pago }}</th>
                    <th>{{ $data->estatus }}</th>
                    <th><a class="btn btn-primary" href="/PDF/{{ $data->archivo }}" target="_blank"><i class="far fa-file-pdf"></i></a></th>
                    <th>
                        <a class="btn btn-info" href="/tenencia/{{ $data->id }}/edit"><i class="fas fa-edit"></i></a>
                    </th>
                    <th><a class="btn btn-danger eliminar" href="/tenenciad/{{ $data->id }}"><i class="fas fa-trash-alt"></i></a></th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
<!-- Alerta -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $('.eliminar').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href')

        swal.fire({
            title: 'Desea eliminar el registro?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar',

        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })

    })
</script>
<!-- Alerta -->
<!-- pagimation-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tablas').DataTable({
            "lengthMenu": [
                [5, 10, 50, -1],
                [5, 10, 50, "All"]
            ]
        });
    });
</script>
<!-- pagimation-->
@stop
