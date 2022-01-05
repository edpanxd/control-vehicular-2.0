@extends('adminlte::page')

@section('title', 'Vehículos')

@section('content_header')
<h1>Vehículos</h1>
@stop

@section('content')
<a class="btn btn-primary mb-3" href="vehiculo/create">Registrar vehículos</a>



<div class="table-responsive">

    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Marca</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Modelo</th>
                <th scope="col">Color</th>
                <th scope="col">Uso</th>
                <th scope="col">Imagen</th>
                <th scope="col"></th>
                <!--<th scope="col">Eliminar inabilitado</th>-->
            </tr>
        </thead>
        <tbody>
            @foreach ($valores as $valores)
                <tr>
                    <td><a href="/dashboardvh/{{ $valores->id }}">{{ $valores->id }}</a></td>
                    <td>{{ $valores->marca }}</td>
                    <td>{{ $valores->serie }}</td>
                    <td>{{ $valores->tipo }}</td>
                    <td>{{ $valores->modelo }}</td>
                    <td>{{ $valores->color }}</td>
                    <td>{{ $valores->uso }}</td>
                    <td><img src="/imagen/{{ $valores->imagen }}" width="50" height="50" alt=""></td>
                    <td>
                        <a class="btn btn-info" href="/vehiculo/{{ $valores->id }}/edit"><i
                                class="fas fa-edit"></i></a>
                    </td>
                  <!--  <th><a class="btn btn-danger eliminar" href="/vehiculod/"><i
                                class="fas fa-trash-alt"></i></a></th>-->
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
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
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
