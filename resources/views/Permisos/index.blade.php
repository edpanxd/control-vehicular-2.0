@extends('adminlte::page')

@section('title', 'Permisos')

@section('content_header')
    <h1>Permisos</h1>
@stop

@section('content')
    <a class="btn btn-primary mb-3" href="permiso/create">Registrar Permisos</a>



    <div class="table-responsive">

        <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">No Permiso</th>
                    <th scope="col">PDF</th>

                    <th scope="col"></th>
                    <th scope="col"></th>
                    <!--<th scope="col">Eliminar inabilitado</th>-->
                </tr>
            </thead>
            <tbody>
                @foreach ($valores as $valores)
                    <tr>
                        <td>{{ $valores->id }}</td>
                        <td>{{ $valores->no_permiso }}</td>
                        <td>
                            @if ($valores->archivo_per == 'Sin archivo')
                                {{ $valores->archivo_per }}
                            @else
                                <a class="btn btn-primary" href="/permisos/{{ $valores->archivo_per }}" target="_blank">
                                    <i class="far fa-file-pdf"></i>
                                </a>
                            @endif
                        </td>

                        <td>
                            <a class="btn btn-info" href="/permiso/{{ $valores->id }}/edit"><i
                                    class="fas fa-edit"></i></a>
                        </td>
                        <th><a class="btn btn-danger eliminar" href="/permisod/{{ $valores->id }}"><i
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
