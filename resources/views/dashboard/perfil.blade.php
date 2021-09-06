@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">


                @foreach ($vehiculo as $vehiculo)
                    <!--carta de informacion pricipal -->
                    <div class="card card-info card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">

                                <img class="profile-user-img img-fluid img-circle" src="/imagen/{{ $vehiculo->imagen }}"
                                    alt="User profile picture">

                            </div>

                            <h3 class="profile-username text-center">{{ $vehiculo->marca }}</h3>

                            <p class="text-muted text-center">{{ $vehiculo->submarca }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Placas</b> <a class="float-right">{{ $vehiculo->placas }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Color</b> <a class="float-right">{{ $vehiculo->color }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Modelo</b> <a class="float-right">{{ $vehiculo->modelo }}</a>
                                </li>

                                <a href="/dashboard" class="btn bg-black">Volver a Dasboard</a>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!--/carta de informacion pricipal -->

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Mas informacion</h3>
                        </div>

                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Tipo</strong>

                            <p class="text-muted">
                                {{ $vehiculo->tipo }}
                            </p>

                            <hr>

                            <strong><i class="fas fa-sort-numeric-down mr-1"></i>Numero de motor</strong>

                            <p class="text-muted"></p>
                            {{ $vehiculo->numeroM }}
                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Serie</strong>

                            <p class="text-muted">
                                {{ $vehiculo->serie }}
                            </p>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> Estatus</strong>

                            <p class="text-muted">
                                {{ $vehiculo->estatus }}
                            </p>
                        </div>

                    </div>

                @endforeach
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#placas" data-toggle="tab">Placas</a></li>
                            <li class="nav-item"><a class="nav-link" href="#poliza" data-toggle="tab">Póliza</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tenencia" data-toggle="tab">Tenencia</a></li>
                            <li class="nav-item"><a class="nav-link" href="#va" data-toggle="tab">Verificación A</a></li>
                            <li class="nav-item"><a class="nav-link" href="#vb" data-toggle="tab">Verificación B</a></li>
                            <li class="nav-item"><a class="nav-link" href="#vf" data-toggle="tab">Verificación federal</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#fm" data-toggle="tab">Físico Mecánico</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="placas">
                                <h1>Placas</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Vencimiento</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">PDF</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($placas as $placas)
                                                <tr>
                                                    <th>{{ $placas->id }}</th>

                                                    <th>{{ $placas->vencimiento }}</th>
                                                    <th>{{ $placas->estatus }}</th>
                                                    <th></th>
                                                    <th><a class="btn btn-primary" href="/PDF/{{ $placas->archivo }}"
                                                            target="_blank">
                                                            <i class="far fa-file-pdf"></i></a></th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla placas -->
                            </div>
                            <div class="tab-pane " id="poliza">
                                <h1>Pólizas</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas2">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Póliza</th>
                                                <th scope="col">Seguro</th>
                                                <th scope="col">Vigencia</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">PDF</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($polizas as $polizas)
                                                <tr>
                                                    <th>{{ $polizas->id }}</th>
                                                    <th>{{ $polizas->poliza }}</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>{{ $polizas->estatus }}</th>
                                                    <th></th>
                                                    <th><a class="btn btn-primary" href="/PDF/{{ $polizas->archivo }}"
                                                            target="_blank"><i class="far fa-file-pdf"></i></a></th>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla poliza -->
                            </div>
                            <div class="tab-pane " id="tenencia">
                                <h1>Tenencias</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas3">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Tenencia</th>
                                                <th scope="col">Pago</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tenencias as $tenencias)
                                                <tr>
                                                    <th>{{ $tenencias->id }}</th>
                                                    <th>{{ $tenencias->tenencia }}</th>
                                                    <th>{{ $tenencias->pago }}</th>
                                                    <th>{{ $tenencias->estatus }}</th>
                                                    <th></th>
                                                    <th><a class="btn btn-primary" href="/PDF/{{ $tenencias->archivo }}"
                                                            target="_blank"><i class="far fa-file-pdf"></i></a></th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tablas tenencia -->
                            </div>
                            <div class="tab-pane " id="va">
                                <h1>Verificación A</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas4">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Verificación</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($verificacion_as as $verificacion_as)
                                                <tr>
                                                    <th>{{ $verificacion_as->id }}</th>
                                                    <th>{{ $verificacion_as->verificacion }}</th>
                                                    <th>{{ $verificacion_as->fecha }}</th>
                                                    <th>{{ $verificacion_as->estatus }}</th>
                                                    <th></th>
                                                    <th><a class="btn btn-primary"
                                                            href="/PDF/{{ $verificacion_as->archivo }}"
                                                            target="_blank"><i class="far fa-file-pdf"></i></a></th>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla verificacion a -->


                            </div>
                            <div class="tab-pane " id="vb">
                                <h1>Verificación B</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas5">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Verificación</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($verificacion_bs as $verificacion_bs)
                                                <tr>
                                                    <th>{{ $verificacion_bs->id }}</th>
                                                    <th>{{ $verificacion_bs->verificacion }}</th>
                                                    <th>{{ $verificacion_bs->fecha }}</th>
                                                    <th>{{ $verificacion_bs->estatus }}</th>
                                                    <th></th>
                                                    <th><a class="btn btn-primary"
                                                            href="/PDF/{{ $verificacion_bs->archivo }}" target="_blank">
                                                            <i class="far fa-file-pdf"></i></a></th>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla verificacion b -->


                            </div>
                            <div class="tab-pane " id="vf">
                                <h1>Verificación Federal</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas6">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Verificación</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($verificacion_fs as $verificacion_fs)
                                                <tr>
                                                    <th>{{ $verificacion_fs->id }}</th>
                                                    <th>{{ $verificacion_fs->verificacion }}</th>
                                                    <th>{{ $verificacion_fs->fecha }}</th>
                                                    <th>{{ $verificacion_fs->estatus }}</th>
                                                    <th></th>
                                                    <th><a class="btn btn-primary"
                                                            href="/PDF/{{ $verificacion_fs->archivo }}"
                                                            target="_blank"><i class="far fa-file-pdf"></i></a></th>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla verificacion f -->


                            </div>
                            <div class="tab-pane " id="fm">
                                <h1>Físico Mecánico</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas7">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Verificación</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($fisico_ms as $fisico_ms)
                                                <tr>
                                                    <th>{{ $fisico_ms->id }}</th>
                                                    <th>{{ $fisico_ms->verificacion }}</th>
                                                    <th>{{ $fisico_ms->fecha }}</th>
                                                    <th>{{ $fisico_ms->estatus }}</th>
                                                    <th></th>
                                                    <th><a class="btn btn-primary" href="/PDF/{{ $fisico_ms->archivo }}"
                                                            target="_blank"><i class="far fa-file-pdf"></i></a></th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla fisico mecanico -->
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
@stop

@section('css')
    
@stop

@section('js')

   
    <script>
        $(document).ready(function() {
            $('#tablas').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
        $(document).ready(function() {
            $('#tablas2').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
        $(document).ready(function() {
            $('#tablas3').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
        $(document).ready(function() {
            $('#tablas4').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
        $(document).ready(function() {
            $('#tablas5').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
        $(document).ready(function() {
            $('#tablas6').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
        $(document).ready(function() {
            $('#tablas7').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
@stop
