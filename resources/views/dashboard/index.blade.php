@extends('adminlte::page')

@section('title', 'Control vehicular')

@section('content_header')
    <h1>Bienvenido</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-mb-3 col-3">
            <div class="small-box bg-purple ">
                <div class="inner">
                    <h3>
                        <!-- {{ $comida = 0 }} -->
                        @foreach ($valores as $valores)
                            <!--{{ $comida = $comida + 1 }}-->
                        @endforeach
                        {{ $comida }}

                    </h3>

                    <p>Vehículos activos.</p>
                </div>
                <div class="icon">
                    <i class="fa fa-car"></i>
                </div>
                <a href="#" class="small-box-footer">mas información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-mb-3 col-3">
            <div class="small-box bg-teal">
                <div class="inner">
                    <h3>
                <!--{{ $V = 0 }}
                  @foreach ($placas as $placas) {{ $V = $V + 1 }} @endforeach -->
                    {{ $V }}
                    </h3>

                    <p>Placas no vigentes.</p>
                </div>
                <div class="icon">
                    <i class="fas fa-address-card"></i>
                </div>
                <a href="/dashboardd/{{ 'placa' }}" class="small-box-footer">mas información
                    <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-mb-3 col-3">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>
                        <!--
                 {{ $p = 0 }}
                 @foreach ($poliza as $poliza) {{ $p = $p + 1 }} @endforeach-->
                {{ $p }}
                    </h3>

                    <p>Pólizas no vigentes.</p>
                </div>
                <div class="icon">
                    <i class="fas fa-lock"></i>
                </div>
                <a href="/dashboardd/{{ 'poliza' }}" class="small-box-footer">mas información <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-mb-3 col-3">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>
                        <!--
                        {{ $t = 0 }}
                 @foreach ($tenencia as $tenencia) {{ $t = $t + 1 }} @endforeach -->
                        {{ $t }}
                    </h3>

                    <p>Tenencias no pagadas.</p>
                </div>
                <div class="icon">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <a href="/dashboardv/{{ 'tenencia' }}" class="small-box-footer">mas información <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-mb-3 col-3">
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>
                <!--{{ $verA = 0 }}
                    @foreach ($Va as $Va) {{ $verA = $verA + 1 }} @endforeach -->
                    {{ $verA }}
                    </h3>

                    <p>Verificación A no pagada.</p>
                </div>
                <div class="icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <a href="/dashboardv/{{ 'verificacion_a' }}" class="small-box-footer">mas
                    información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-mb-3 col-3">
            <div class="small-box bg-teal">
                <div class="inner">
                    <h3>
                        <!--{{ $verB = 0 }}
                            @foreach ($Vb as $Vb) {{ $verB = $verB + 1 }} @endforeach -->
                        {{ $verB }}
                    </h3>

                    <p>Verificación B no pagada.</p>
                </div>
                <div class="icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <a href="/dashboardv/{{ 'verificacion_B' }}" class="small-box-footer">mas
                    información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-mb-3 col-3">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>
                        <!--{{ $verF = 0 }}
                                                        @foreach ($Vf as $Vf) {{ $verF = $verF + 1 }} @endforeach -->
                        {{ $verF }}
                    </h3>

                    <p>Verificación federal no pagada.</p>
                </div>
                <div class="icon">
                    <i class="fas fa-check-square"></i>
                </div>
                <a href="/dashboardv/{{ 'verificacion_f' }}" class="small-box-footer">mas
                    información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-mb-3 col-3">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>
                        <!--{{ $fiM = 0 }}
                                                        @foreach ($Fm as $Fm) {{ $fiM = $fiM + 1 }} @endforeach -->
                        {{ $fiM }}
                    </h3>

                    <p>Físico mecánico no pagada.</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tools"></i>
                </div>
                <a href="/dashboardv/{{ 'fisico_m' }}" class="small-box-footer">mas información <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">

        @foreach ($datos as $datos)
            <div class="col-4">
                <div class="card card-widget widget-user">
                    <div>
                        <div class="widget-user-header bg-gray">
                            <h3 class="widget-user-username">{{ $datos->marca }}</h3>
                            <h5 class="widget-user-desc">{{ $datos->submarca }}</h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="/imagen/{{ $datos->imagen }}" alt="User Avatar">
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $datos->color }}</h5>
                                        <span class="description-text">Color</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $datos->modelo }}</h5>
                                        <span class="description-text">Modelo</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $datos->estatus }}</h5>
                                        <span class="description-text">Estatus</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <a href="/dashboardvh/{{$datos->id}}" class="btn btn-default bg-maroon mb-4">Perfil de vehículo. </a>
                        </div>

                    </div>

                </div>
            </div>
        @endforeach

    @stop

    @section('css')

    @stop

    @section('js')
    @stop
