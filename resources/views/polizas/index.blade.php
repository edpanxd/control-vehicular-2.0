@extends('adminlte::page')

@section('title', 'Pólizas')

@section('content_header')
    <h1>Pólizas</h1>
@stop

@section('content')
    <a class="btn btn-primary mb-3" href="poliza/create">Registrar póliza</a>
    <div class="table-responsive">

        <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Vehículo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Póliza</th>
                    <th scope="col">PDF</th>
                    <th scope="col">Aseguradora</th>
                    <th scope="col">Vencimiento</th>
                    <th scope="col">Estatus</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->id_vehiculo }}</td>
                        <td>{{ $data->marca }}</td>
                        <td>{{ $data->serie }}</td>
                        <td>{{ $data->poliza }}</td>
                        <td>
                            @if ($data->archivo == 'Sin archivo')
                                {{ $data->archivo }}
                            @else
                                <a class="btn btn-primary" href="/Polizas/{{ $data->archivo }}" target="_blank"><i
                                        class="far fa-file-pdf"></i></a>
                            @endif

                        </td>
                        <td>{{ $data->aseguradora }}</td>
                        <td>{{ $data->vencimiento }}</td>
                        <td>{{ $data->estatus }}</td>
                        <td>
                            <a class="btn btn-info" href="/poliza/{{ $data->id }}/edit"><i
                                    class="fas fa-edit"></i></a>
                        </td>
                        <td> <a class="btn btn-danger eliminar" href="/polizad/{{ $data->id }}"><i
                                    class="fas fa-trash-alt"></i></a></td>
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
                    [25, 50, 100, -1],
                    [25, 50, 100, "All"]
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
            });
        });
    </script>
    <!-- pagimation-->
@stop
