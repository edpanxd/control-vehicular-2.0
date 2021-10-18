@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>PERFIL</h1>
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
                                    <b>Uso</b> <a class="float-right">{{ $vehiculo->uso }}</a>
                                </li>
                                @if ($vehiculo->uso == 'PARTICULAR')
                                    <li class="list-group-item">
                                        <b>Nombre </b> <a class="float-right">{{ $vehiculo->nombre_p }}</a>
                                    </li>
                                @endif
                                <li class="list-group-item">
                                    <b>Modelo</b> <a class="float-right">{{ $vehiculo->modelo }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Empresa</b> <a class="float-right">{{ $vehiculo->empresa }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Adquisición</b> <a class="float-right">{{ $vehiculo->adquisicion }}</a>
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

                            <p class="text-muted">
                                {{ $vehiculo->numeroM }}
                            </p>

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
                            <li class="nav-item"><a class="nav-link active" href="#documentos"
                                    data-toggle="tab">Documentos</a></li>
                            <li class="nav-item"><a class="nav-link " href="#placas" data-toggle="tab">Placas</a>
                            </li>
                            <li class="nav-item"><a class="nav-link " href="#tarjeta"
                                    data-toggle="tab">Tarjeta</a></li>
                            <li class="nav-item"><a class="nav-link" href="#poliza" data-toggle="tab">Póliza</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#tenencia"
                                    data-toggle="tab">Tenencia</a></li>
                            <li class="nav-item"><a class="nav-link" href="#va" data-toggle="tab">Verificación
                                    A</a></li>
                            <li class="nav-item"><a class="nav-link" href="#vb" data-toggle="tab">Verificación
                                    B</a></li>
                            <li class="nav-item"><a class="nav-link" href="#vf" data-toggle="tab">Verificación
                                    Federal A</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#vfa" data-toggle="tab">Verificación
                                    Federal B</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#fm" data-toggle="tab">Físico
                                    Mecánico</a></li>
                            <li class="nav-item"><a class="nav-link" href="#permisos" data-toggle="tab">
                                    Permisos</a></li>
                            <li class="nav-item"><a class="nav-link" href="#anterior" data-toggle="tab">
                                    Propietarios Anteriores</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="documentos">
                                <h1>Documentos de propietario</h1>

                                @foreach ($documentos as $documentos)
                                    <div class="row">
                                        <div class="col-5 mb-3">
                                            <h5>Nombre del vendedor:</h5>
                                        </div>
                                        <div class="col-4 mb-3">
                                            <h5>{{ $documentos->vendedor }}</h5>
                                        </div>
                                        <div class="col-5 mb-3">
                                            <h5>Nombre del comprador:</h5>
                                        </div>
                                        <div class="col-4 mb-3">
                                            <h5>{{ $documentos->comprador }}</h5>
                                        </div>
                                        <div class="col-5 mb-3">
                                            <h5>Contrato de compraventa:</h5>
                                        </div>
                                        <div class="col-4 mb-3">
                                            @if ($documentos->archivo_con == 'Sin archivo')
                                                <h5>{{ $documentos->archivo_con }}</h5>
                                            @else
                                                <a class="btn btn-primary"
                                                    href="/Contrato/{{ $documentos->archivo_con }}" target="_blank">
                                                    <i class="far fa-file-pdf"></i>
                                                </a>
                                            @endif
                                        </div>
                                        <div class="col-5 mb-3">
                                            <h5>Carta Responsiva:</h5>
                                        </div>
                                        <div class="col-4 mb-3">
                                            @if ($documentos->archivo_car == 'Sin archivo')
                                                <h5>{{ $documentos->archivo_car }}</h5>
                                            @else
                                                <a class="btn btn-primary"
                                                    href="/cartas responsivas/{{ $documentos->archivo_car }}"
                                                    target="_blank">
                                                    <i class="far fa-file-pdf"></i>
                                                </a>
                                            @endif
                                        </div>
                                        <div class="col-5 mb-3">
                                            <h5>Identificacion del vendedor:</h5>
                                        </div>
                                        <div class="col-4 mb-3">
                                            @if ($documentos->archivo_iden == 'Sin archivo')
                                                <h5>{{ $documentos->archivo_iden }}</h5>
                                            @else
                                                <a class="btn btn-primary"
                                                    href="/Identificaciones/{{ $documentos->archivo_iden }}"
                                                    target="_blank">
                                                    <i class="far fa-file-pdf"></i>
                                                </a>
                                            @endif
                                        </div>
                                        <div class="col-5 mb-3">
                                            <h5>Informe repuve:</h5>
                                        </div>
                                        <div class="col-4 mb-3">
                                            @if ($documentos->archivo_in == 'Sin archivo')
                                                <h5>{{ $documentos->archivo_in }}</h5>
                                            @else
                                                <a class="btn btn-primary"
                                                    href="/Informe repuve/{{ $documentos->archivo_in }}" target="_blank">
                                                    <i class="far fa-file-pdf"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                                @if ($estatus == 'Nacional')
                                    <h4>Vehiculo Nacional</h4>
                                    @foreach ($Vehiculos_T as $Vehiculos_T)
                                        <div class="row">
                                            <div class="col-5 mb-3">
                                                <h5>Numero de Factura:</h5>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <h5>{{ $Vehiculos_T->no_factura }}</h5>
                                            </div>
                                            <div class="col-5 mb-3">
                                                <h5>Factura:</h5>
                                            </div>
                                            <div class="col-4 mb-3">
                                                @if ($Vehiculos_T->archivo_fa == 'Sin archivo')
                                                    <h5>{{ $Vehiculos_T->archivo_fa }}</h5>
                                                @else
                                                    <a class="btn btn-primary"
                                                        href="/Factura/{{ $Vehiculos_T->archivo_fa }}" target="_blank">
                                                        <i class="far fa-file-pdf"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-5 mb-3">
                                                <h5>Refacturado:</h5>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <h5>{{ $Vehiculos_T->refactura }}</h5>
                                            </div>
                                            <div class="col-5 mb-3">
                                                <h5>Archivo Refacturado:</h5>
                                            </div>
                                            <div class="col-4 mb-3">
                                                @if ($Vehiculos_T->archivo_refa == 'Sin archivo')
                                                    <h5>{{ $Vehiculos_T->archivo_refa }}</h5>
                                                @else
                                                    <a class="btn btn-primary"
                                                        href="/Refactura/{{ $Vehiculos_T->archivo_refa }}"
                                                        target="_blank">
                                                        <i class="far fa-file-pdf"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-5 mb-3">
                                                <h5>carta Factura:</h5>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <h5>{{ $Vehiculos_T->carta_fa }}</h5>
                                            </div>
                                            <div class="col-5 mb-3">
                                                <h5>Archivo carta Factura:</h5>
                                            </div>
                                            <div class="col-4 mb-3">
                                                @if ($Vehiculos_T->archivo_car == 'Sin archivo')
                                                    <h5>{{ $Vehiculos_T->archivo_car }}</h5>
                                                @else
                                                    <a class="btn btn-primary"
                                                        href="/Carta factura/{{ $Vehiculos_T->archivo_car }}"
                                                        target="_blank">
                                                        <i class="far fa-file-pdf"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                                @if ($estatus == 'Importado')
                                    <h4>Vehiculo Importado</h4>
                                    @foreach ($Vehiculos_T as $Vehiculos_T)
                                        <div class="row">
                                            <div class="col-5 mb-3">
                                                <h5>Numero de Factura:</h5>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <h5>{{ $Vehiculos_T->no_factura }}</h5>
                                            </div>
                                            <div class="col-5 mb-3">
                                                <h5>Factura:</h5>
                                            </div>
                                            <div class="col-4 mb-3">
                                                @if ($Vehiculos_T->archivo_fa == 'Sin archivo')
                                                    <h5>{{ $Vehiculos_T->archivo_fa }}</h5>
                                                @else
                                                    <a class="btn btn-primary"
                                                        href="/Facturas/{{ $Vehiculos_T->archivo_fa }}" target="_blank">
                                                        <i class="far fa-file-pdf"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-5 mb-3">
                                                <h5>Pedimento:</h5>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <h5>{{ $Vehiculos_T->pedimiento }}</h5>
                                            </div>
                                            <div class="col-5 mb-3">
                                                <h5>Archivo Pedimento:</h5>
                                            </div>
                                            <div class="col-4 mb-3">
                                                @if ($Vehiculos_T->archivo_pe == 'Sin archivo')
                                                    <h5>{{ $Vehiculos_T->archivo_pe }}</h5>
                                                @else
                                                    <a class="btn btn-primary"
                                                        href="/Pedimento/{{ $Vehiculos_T->archivo_pe }}" target="_blank">
                                                        <i class="far fa-file-pdf"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-5 mb-3">
                                                <h5>Titulo de propietario:</h5>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <h5>{{ $Vehiculos_T->titulo_pro }}</h5>
                                            </div>
                                            <div class="col-5 mb-3">
                                                <h5>Archivo titulo de propietario:</h5>
                                            </div>
                                            <div class="col-4 mb-3">
                                                @if ($Vehiculos_T->archivo_titu == 'Sin archivo')
                                                    <h5>{{ $Vehiculos_T->archivo_titu }}</h5>
                                                @else
                                                    <a class="btn btn-primary"
                                                        href="/Titulos propietario/{{ $Vehiculos_T->archivo_titu }}"
                                                        target="_blank">
                                                        <i class="far fa-file-pdf"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <!-- -->
                            <div class="tab-pane" id="placas">
                                <h1>Placas</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Placa</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Vencimiento</th>
                                                <th scope="col">PDF</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($placas as $placas)
                                                <tr>
                                                    <td>{{ $placas->id }}</td>
                                                    <td>{{ $placas->placas }}</td>
                                                    <td>{{ $placas->estatus }}</td>
                                                    <td>{{ $placas->vencimiento }}</td>
                                                    <td><a class="btn btn-primary" href="/Placas/{{ $placas->archivo }}"
                                                            target="_blank">
                                                            <i class="far fa-file-pdf"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla placas -->
                            </div>
                            <!-- -->
                            <div class="tab-pane" id="tarjeta">
                                <h1>Tarjetas de circulacion</h1>
                                <div class="table-responsive">

                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas8">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Folio</th>
                                                <th scope="col">Placa</th>
                                                <th scope="col">Inicio</th>
                                                <th scope="col">Vencimiento</th>
                                                <th scope="col">Esatus</th>
                                                <th scope="col">PDF</th>
                                                <th scope="col"></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tarjetacs as $tarjetacs)
                                                <tr>
                                                    <td>{{ $tarjetacs->id }}</td>
                                                    <td>{{ $tarjetacs->folio }}</td>
                                                    <td>{{ $tarjetacs->placas }}</td>
                                                    <td>{{ $tarjetacs->inicio }}</td>
                                                    <td>{{ $tarjetacs->vencimiento }}</td>
                                                    <td>{{ $tarjetacs->estatus }}</td>
                                                    <td><a class="btn btn-primary"
                                                            href="/Tarjetas de circulacion/{{ $tarjetacs->archivo_pla }}"
                                                            target="_blank">
                                                            <i class="far fa-file-pdf"></i></a></td>
                                                    <td>
                                                        <a class="btn btn-info"
                                                            href="/tarjeta/{{ $tarjetacs->id }}/edit"><i
                                                                class="fas fa-edit"></i></a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla tarjeta de circulacion -->
                            </div>
                            <!-- -->
                            <div class="tab-pane " id="poliza">
                                <h1>Pólizas</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas2">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Póliza</th>
                                                <th scope="col">Aseguradora</th>
                                                <th scope="col">Inicio</th>
                                                <th scope="col">Vencimiento</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">PDF</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($polizas as $polizas)
                                                <tr>
                                                    <td>{{ $polizas->id }}</td>
                                                    <td>{{ $polizas->poliza }}</td>
                                                    <td>{{ $polizas->aseguradora }}</td>
                                                    <td>{{ $polizas->inicio }}</td>
                                                    <td>{{ $polizas->vencimiento }}</td>
                                                    <td>{{ $polizas->estatus }}</td>
                                                    <th><a class="btn btn-primary"
                                                            href="/Polizas/{{ $polizas->archivo }}" target="_blank"><i
                                                                class="far fa-file-pdf"></i></a></th>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla poliza -->
                            </div>
                            <!-- -->
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
                                                <th scope="col">PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tenencias as $tenencias)
                                                <tr>
                                                    <td>{{ $tenencias->id }}</td>
                                                    <td>{{ $tenencias->tenencia }}</td>
                                                    <td>{{ $tenencias->pago }}</td>
                                                    <td>{{ $tenencias->estatus }}</td>
                                                    <td><a class="btn btn-primary"
                                                            href="/Tenencias/{{ $tenencias->archivo }}"
                                                            target="_blank"><i class="far fa-file-pdf"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tablas tenencia -->
                            </div>
                            <!-- -->
                            <div class="tab-pane " id="va">
                                <h1>Verificación Estatal 1° Periodo</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas4">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Verificación</th>
                                                <th scope="col">placa</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Engomado</th>
                                                <th scope="col">PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($verificacion_as as $verificacion_as)
                                                <tr>
                                                    <td>{{ $verificacion_as->id }}</td>
                                                    <td>{{ $verificacion_as->verificacion }}</td>
                                                    <td>{{ $verificacion_as->placa }}</td>
                                                    <td>{{ $verificacion_as->fecha }}</td>
                                                    <td>{{ $verificacion_as->estatus }}</td>

                                                    @switch($verificacion_as->engomado)
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

                                                    <td><a class="btn btn-primary"
                                                            href="/Verificaciones A/{{ $verificacion_as->archivo }}"
                                                            target="_blank"><i class="far fa-file-pdf"></i></a></td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla verificacion a -->


                            </div>
                            <!-- -->
                            <div class="tab-pane " id="vb">
                                <h1>Verificación Estatal 2° Periodo</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas5">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Verificación</th>
                                                <th scope="col">Placa</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Engomado</th>
                                                <th scope="col">PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($verificacion_bs as $verificacion_bs)
                                                <tr>
                                                    <td>{{ $verificacion_bs->id }}</td>
                                                    <td>{{ $verificacion_bs->verificacion }}</td>
                                                    <td>{{ $verificacion_bs->placa }}</td>
                                                    <td>{{ $verificacion_bs->fecha }}</td>
                                                    <td>{{ $verificacion_bs->estatus }}</td>
                                                    @switch($verificacion_bs->engomado)
                                                        @case("5 u 6")
                                                            <td class="bg-yellow">JULIO, AGOSTO</td>
                                                        @break
                                                        @case("7 u 8")
                                                            <td class="bg-pink">AGOSTO, SEPTIEMBRE</td>
                                                        @break
                                                        @case("3 o 4")
                                                            <td class="bg-red">SEPTIEMBRE, OCTUBRE</td>
                                                        @break
                                                        @case("1 o 2")
                                                            <td class="bg-green">OCTUBRE, NOVIEMBRE</td>
                                                        @break
                                                        @case("9 o 0")
                                                            <td class="bg-info">NOVIEMBRE, DICIEMBRE</td>
                                                        @break
                                                        @default
                                                    @endswitch
                                                    <td><a class="btn btn-primary"
                                                            href="/Verificaciones B/{{ $verificacion_bs->archivo }}"
                                                            target="_blank">
                                                            <i class="far fa-file-pdf"></i></a></td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla verificacion b -->


                            </div>
                            <!-- -->
                            <div class="tab-pane " id="vf">
                                <h1>Verificación Federal 1° Periodo</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas6">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Verificación</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($verificacion_fs as $verificacion_fs)
                                                <tr>
                                                    <td>{{ $verificacion_fs->id }}</td>
                                                    <td>{{ $verificacion_fs->verificacion }}</td>
                                                    <td>{{ $verificacion_fs->fecha }}</td>
                                                    <td>{{ $verificacion_fs->estatus }}</td>
                                                    <td><a class="btn btn-primary"
                                                            href="/verificacion federal/{{ $verificacion_fs->archivo }}"
                                                            target="_blank"><i class="far fa-file-pdf"></i></a></td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla verificacion f -->


                            </div>
                            <!-- -->
                            <div class="tab-pane " id="vfa">
                                <h1>Verificación Federal 2° Periodo</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas9">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Verificación</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($verificacion_fsa as $verificacion_fsa)
                                                <tr>
                                                    <td>{{ $verificacion_fsa->id }}</td>
                                                    <td>{{ $verificacion_fsa->verificacion }}</td>
                                                    <td>{{ $verificacion_fsa->fecha }}</td>
                                                    <td>{{ $verificacion_fsa->estatus }}</td>
                                                    <td><a class="btn btn-primary"
                                                            href="/Verificacion federal 2/{{ $verificacion_fsa->archivo }}"
                                                            target="_blank"><i class="far fa-file-pdf">
                                                            </i>
                                                        </a></td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla verificacion f -->


                            </div>
                            <!-- -->
                            <div class="tab-pane " id="fm">
                                <h1>Físico Mecánico</h1>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas7">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Año</th>
                                                <th scope="col">placa</th>
                                                <th scope="col">Fechas de verificacion</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($fisico_ms as $fisico_ms)
                                                <tr>
                                                    <td>{{ $fisico_ms->id }}</td>
                                                    <td>{{ $fisico_ms->verificacion }}</td>
                                                    <td>{{ $fisico_ms->placa }}</td>
                                                    <td>{{ $fisico_ms->terminacion }}</td>
                                                    <td>{{ $fisico_ms->fecha }}</td>
                                                    <td>{{ $fisico_ms->estatus }}</td>
                                                    <td><a class="btn btn-primary"
                                                            href="/fisico mecanico/{{ $fisico_ms->archivo }}"
                                                            target="_blank"><i class="far fa-file-pdf"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla fisico mecanico -->
                            </div>
                            <!-- -->
                            <div class="tab-pane " id="permisos">
                                <h1>Permisos</h1>
                                <div class="table-responsive">

                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas10">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">No Permiso</th>
                                                <th scope="col">PDF</th>

                                                <th scope="col"></th>

                                                <!--<th scope="col">Eliminar inabilitado</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($permisos as $permisos)
                                                <tr>
                                                    <td>{{ $permisos->id }}</td>
                                                    <td>{{ $permisos->no_permiso }}</td>
                                                    <td>
                                                        @if ($permisos->archivo_per == 'Sin archivo')
                                                            {{ $permisos->archivo_per }}
                                                        @else
                                                            <a class="btn btn-primary"
                                                                href="/permisos/{{ $permisos->archivo_per }}"
                                                                target="_blank">
                                                                <i class="far fa-file-pdf"></i>
                                                            </a>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a class="btn btn-info"
                                                            href="/permiso/{{ $permisos->id }}/edit"><i
                                                                class="fas fa-edit"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla fisico mecanico -->
                            </div>
                            <!-- -->
                            <div class="tab-pane " id="anterior">
                                <h1> Propietarios Anteriores</h1>
                                <div class="table-responsive">

                                    <table class="table table-striped table-bordered shadow-lg mt-4" id="tablas11">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Vendedor</th>
                                                <th scope="col">PDF</th>
                                                <th scope="col">Comprador</th>
                                                <th scope="col">PDF</th>
                                                <th scope="col"></th>

                                                <!--<th scope="col">Eliminar inabilitado</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($propietarios_as as $propietarios_as)
                                                <tr>
                                                    <td>{{ $propietarios_as->id }}</td>
                                                    <td>{{ $propietarios_as->vendedor }}</td>
                                                    <td>
                                                        @if ($propietarios_as->ide_ven == 'Sin archivo')
                                                            {{ $propietarios_as->ide_ven }}
                                                        @else
                                                            <a class="btn btn-primary"
                                                                href="/Propietarios anteriores/{{ $propietarios_as->ide_ven }}"
                                                                target="_blank">
                                                                <i class="far fa-file-pdf"></i>
                                                            </a>
                                                        @endif
                                                    </td>
                                                    <td>{{ $propietarios_as->comprador }}</td>
                                                    <td>
                                                        @if ($propietarios_as->ide_com == 'Sin archivo')
                                                            {{ $propietarios_as->ide_com }}
                                                        @else
                                                            <a class="btn btn-primary"
                                                                href="/Propietarios anteriores/{{ $propietarios_as->ide_com }}"
                                                                target="_blank">
                                                                <i class="far fa-file-pdf"></i>
                                                            </a>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a class="btn btn-info"
                                                            href="/propietario/{{ $propietarios_as->id }}/edit"><i
                                                                class="fas fa-edit"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Tabla fisico mecanico -->
                            </div>
                            <!-- -->
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.4.6/jscolor.min.js">
    </script>
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
        $(document).ready(function() {
            $('#tablas8').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
        $(document).ready(function() {
            $('#tablas9').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
        $(document).ready(function() {
            $('#tablas10').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
        $(document).ready(function() {
            $('#tablas11').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
@stop
