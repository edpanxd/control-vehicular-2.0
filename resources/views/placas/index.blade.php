@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
<h1>Placas</h1>
@stop

@section('content')
<a class="btn btn-primary mb-3" href="placa/create">Registrar placas</a>
<div class="table-responsive">

    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Vehiculo</th>
                <th scope="col">placas</th>
                <th scope="col">Vencimiento</th>
                <th scope="col">Estatus</th>
                <th scope="col">Nombre PDF</th>
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
                    <th>{{ $data->placas }}</th>
                    <th>{{ $data->vencimiento }}</th>
                    <th>{{ $data->estatus }}</th>
                    <th>{{ $data->nombre }}</th>
                    <th><a class="btn btn-primary" href="/PDF/{{ $data->archivo }}" target="_blank">
                        <i class="far fa-file-pdf"></i></a></th>
                    <th>
                        <a class="btn btn-info" href="/placa/{{ $data->id }}/edit"><i class="fas fa-edit"></i></a>
                    </th>
                    <th>
                        <a class="btn btn-danger eliminar" href="/placad/{{ $data->id }}">
                            <i class="fas fa-trash-alt"></i></a>
                    </th>
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
