@extends('adminlte::page')

@section('title', 'Vehículos')

@section('content_header')
    <h1>Documentos</h1>
@stop

@section('content')
    <a class="btn btn-primary mb-3" href="documento/create">Registrar Documento</a>
    <div class="table-responsive ">
        <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas" style="text-align:center;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Vendedor</th>
                    <th scope="col">Comprador</th>
                    <th scope="col">Contrato</th>
                    <th scope="col">Carta Responsiva</th>
                    <th scope="col">Identificacion del vendedor</th>
                    <th scope="col">Informa repuve</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <!--<th scope="col">Eliminar inabilitado</th>-->
                </tr>
            </thead>
            <tbody>
                @foreach ($valores as $valores)
                    <tr>
                        <td>{{ $valores->id }}</td>
                        <td>{{ $valores->vendedor }}</td>
                        <td>{{ $valores->comprador }}</td>
                        <td>
                            @if ($valores->archivo_con == 'Sin archivo')
                                {{ $valores->archivo_con }}
                            @else
                                <a class="btn btn-primary" href="/Contrato/{{ $valores->archivo_con }}"
                                    target="_blank">
                                    <i class="far fa-file-pdf"></i>
                                </a>
                            @endif
                        </td>
                        <td>
                            @if ($valores->archivo_car == 'Sin archivo')
                                {{ $valores->archivo_car }}
                            @else
                                <a class="btn btn-primary" href="/cartas responsivas/{{ $valores->archivo_car }}"
                                    target="_blank">
                                    <i class="far fa-file-pdf"></i>
                                </a>
                            @endif
                        </td>
                        <td>
                            @if ($valores->archivo_iden == 'Sin archivo')
                                {{ $valores->archivo_iden }}
                            @else
                                <a class="btn btn-primary" href="/Identificaciones/{{ $valores->archivo_iden }}"
                                    target="_blank">
                                    <i class="far fa-file-pdf"></i>
                                </a>
                            @endif
                        </td>
                        <td>
                            @if ($valores->archivo_in == 'Sin archivo')
                                {{ $valores->archivo_in }}
                            @else
                                <a class="btn btn-primary" href="/Informe repuve/{{ $valores->archivo_in }}"
                                    target="_blank">
                                    <i class="far fa-file-pdf"></i>
                                </a>
                            @endif
                        </td>


                        <td>
                            <a class="btn btn-info" href="/documento/{{ $valores->id }}/edit"><i
                                    class="fas fa-edit"></i></a>
                        </td>
                        <th><a class="btn btn-danger eliminar" href="/documentod/{{ $valores->id }}"><i class="fas fa-trash-alt"></i></a></th>
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
