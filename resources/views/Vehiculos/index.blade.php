@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Registro de vehiculos</h1>
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
                    <th scope="col">acciones</th>
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
                        <th><img src="/imagen/{{$valores->imagen}}" width="50" height="50" alt=""></th>
                        <th>
                            <a class="btn btn-info" href="/vehiculo/{{ $valores->id }}/edit">Editar</a>
                            <a class="btn btn-danger eliminar" href="/vehiculod/{{ $valores->id }}">Eliminar</a>
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
                type: 'warning',
                icon: 'warning',
                showCancelButton: true,
                CancelButtonColor: '#2E2E2E',
                confirmButtonColor: '#B40404',
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
            $('#tablas').DataTable();
        });
    </script>
    <!-- pagimation-->
@stop
