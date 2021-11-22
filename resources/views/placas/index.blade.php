@extends('adminlte::page')

@section('title', 'Placas')

@section('content_header')
<h1>Placas</h1>
@stop

@section('content')
<a class="btn btn-primary mb-3" href="placa/create">Registrar placas</a>
<div class="table-responsive">

    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Vehículo</th>
                <th scope="col">Serie</th>
                <th scope="col">Placas</th>
                <th scope="col">PDF</th>
                <th scope="col">Vencimiento</th>
                <th scope="col">Estatus</th>
                <th scope="col">Observaciones</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->marca }}</td>
                    <td>{{ $data->serie }}</td>
                    <td>{{$data->placas}}</td>
                    <td><a class="btn btn-primary" href="/Placas/{{ $data->archivo }}" target="_blank">
                        <i class="far fa-file-pdf"></i></a></td>
                    <td>{{ $data->vencimiento }}</td>
                    <td>{{ $data->estatus }}</td>
                    <td>{{ $data->observaciones }}</td>
                       <td> <a class="btn btn-info" href="/placa/{{ $data->id }}/edit"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                        <a class="btn btn-danger eliminar" href="/placad/{{ $data->id }}">
                            <i class="fas fa-trash-alt"></i></a>
                    </td>
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
<script 
    type="text/javascript">
    $('.eliminar').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href')

        swal.fire({
            title: 'Desea eliminar el registro?',
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
<script>
    $('.select2').select2({
    placeholder: 'Seleccione un vehiculo'
  });
</script>
<!-- pagimation-->
@stop
