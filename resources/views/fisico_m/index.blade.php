@extends('adminlte::page')

@section('title', 'Físico Mecánico')

@section('content_header')
    <h1>Físico mecánico </h1>
@stop

@section('content')
    <a class="btn btn-primary mb-3" href="fisico_m/create">Registrar Físico mecánico</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Vehículo</th>
                    <th scope="col">Placas</th>
                    <th scope="col">Verificación</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Nombre de PDF</th>
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
                        <th>{{ $data->verificacion }}</th>
                        <th>{{ $data->fecha }}</th>
                        <th>{{ $data->estatus }}</th>
                        <th>{{ $data->nombre }}</th>
                        <th><a class="btn btn-primary" href="/PDF/{{ $data->archivo }}" target="_blank"><i
                                    class="far fa-file-pdf"></i></a></th>
                        <th>
                            <a class="btn btn-info" href="/fisico_m/{{ $data->id }}/edit"><i
                                    class="fas fa-edit"></i></a>
                        </th>
                        <th><a class="btn btn-danger eliminar" href="/fisico_md/{{ $data->id }}"><i
                                    class="fas fa-trash-alt"></i></a></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')

@stop

@section('js')
    <!-- Alerta -->
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
