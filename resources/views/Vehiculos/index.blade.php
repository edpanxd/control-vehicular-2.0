@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
<h1>Vehiculos</h1>
@stop

@section('content')
<a class="btn btn-primary mb-3" href="vehiculo/create">Registrar vehiculo</a>



<div class="table-responsive">

    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Marca</th>
                <th scope="col">Submarca</th>
                <th scope="col">tipo</th>
                <th scope="col">modelo</th>
                <th scope="col">Color</th>
                <th scope="col">placas</th>
                <th scope="col">imagen</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($valores as $valores)
                <tr>
                    <th>{{ $valores->id }}</th>
                    <th>{{ $valores->marca }}</th>
                    <th>{{ $valores->submarca }}</th>
                    <th>{{ $valores->tipo }}</th>
                    <th>{{ $valores->modelo }}</th>
                    <th>{{ $valores->color }}</th>
                    <th>{{ $valores->placas }}</th>
                    <th><img src="/imagen/{{ $valores->imagen }}" width="50" height="50" alt=""></th>
                    <th>
                        <a class="btn btn-info" href="/vehiculo/{{ $valores->id }}/edit"><i
                                class="fas fa-edit"></i></a>
                    </th>
                    <th><a class="btn btn-danger eliminar" href="/vehiculod/{{ $valores->id }}"><i
                                class="fas fa-trash-alt"></i></a></th>
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
            text: "Recuarda que si eliminas el vehiculo se eliminara automanticamnete todos los registros con los que tenga relacion",
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
