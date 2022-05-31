@extends('adminlte::page')

@section('title', 'Vehículos')

@section('content_header')
    <h1>Vehiculos Importados </h1>
@stop

@section('content')
    <a class="btn btn-primary mb-3" href="vehiculoi/create">Registrar vehículos</a>



    <div class="table-responsive">

        <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Vehiculo</th>
                    <th scope="col">No factura</th>
                    <th scope="col">PDF</th>
                    <th scope="col">Pedimento</th>
                    <th scope="col">PDF</th>
                    <th scope="col">Titulo propietario</th>
                    <th scope="col">PDF</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <!--<th scope="col">Eliminar inabilitado</th>-->
                </tr>
            </thead>
            <tbody>
                @foreach ($valores as $valores)
                    <tr>
                        <td><a href="/dashboardvh/{{ $valores->id_vehiculo }}">{{ $valores->id_vehiculo }}</a></td>
                        <td>{{ $valores->no_factura }}</td>
                        <td>
                            @if ($valores->archivo_fa == 'Sin archivo')
                                {{ $valores->archivo_fa }}
                            @else
                                <a class="btn btn-primary" href="/Facturas/{{ $valores->archivo_fa }}" target="_blank">
                                    <i class="far fa-file-pdf"></i>
                                </a>
                            @endif
                        </td>
                        <td>{{ $valores->pedimiento }}</td>
                        <td>
                            @if ($valores->archivo_pe == 'Sin archivo')
                                {{ $valores->archivo_pe }}
                            @else
                                <a class="btn btn-primary" href="/Pedimento/{{ $valores->archivo_pe }}" target="_blank">
                                    <i class="far fa-file-pdf"></i>
                                </a>
                            @endif
                        </td>
                        <td>{{ $valores->titulo_pro }}</td>
                        <td>
                            @if ($valores->archivo_titu == 'Sin archivo')
                                {{ $valores->archivo_titu }}
                            @else
                                <a class="btn btn-primary" href="/Titulos propietario/{{ $valores->archivo_titu }}"
                                    target="_blank">
                                    <i class="far fa-file-pdf"></i>
                                </a>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-info" href="/vehiculoi/{{ $valores->id }}/edit"><i
                                    class="fas fa-edit"></i></a>
                        </td>
                        <th><a class="btn btn-danger eliminar" href="/vehiculoid/"><i class="fas fa-trash-alt"></i></a></th>
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
