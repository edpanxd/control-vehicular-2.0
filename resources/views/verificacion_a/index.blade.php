@extends('adminlte::page')

@section('title', 'Verificación')

@section('content_header')
    <h1>Verificación Estatal 1° Periodo</h1>
@stop

@section('content')
    <a class="btn btn-primary mb-3" href="verificacion_a/create">Registrar Verificación</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Vehículo</th>
                    <th scope="col">serie</th>
                    <th scope="col">placa</th>
                    <th scope="col">Engomado</th>
                    <th scope="col">Verificación</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">PDF</th>
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
                        <td>{{ $data->placa}} </td>
                        @switch($data->engomado)
                        @case("5 u 6")
                        <td class="bg-yellow">FEBRERO, MARZO</td>
                            @break
                        @case("7 u 8")
                        <td class="bg-pink">FEBRERO, MARZO</td>
                            @break
                        @case("3 o 4")
                        <td class="bg-red">MARZO, ABRIL</td>
                            @break
                        @case("1 o 2")
                        <td class="bg-green">ABRIL, MAYO</td>
                            @break
                        @case("9 o 0")
                        <td class="bg-info">MAYO-JUNIO</td>
                            @break
                        @default
                        @endswitch
                        <td>{{ $data->verificacion }}</td>
                        <td>{{ $data->fecha }}</td>
                        <td>{{ $data->estatus }}</td>

                        <td><a class="btn btn-primary" href="/Verificaciones A/{{ $data->archivo }}" target="_blank"><i
                                    class="far fa-file-pdf"></i></a></td>
                        <td>
                            <a class="btn btn-info" href="/verificacion_a/{{ $data->id }}/edit"><i
                                    class="fas fa-edit"></i></a>

                        </td>
                        <td><a class="btn btn-danger eliminar" href="/verificacion_ad/{{ $data->id }}"><i
                                    class="fas fa-trash-alt"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.4.6/jscolor.min.js"></script>
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
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
    <!-- pagimation-->
@stop
