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

                <p>vehiculos registrados</p>
            </div>
            <div class="icon">
                <i class="fa fa-car"></i>
            </div>
            <a href="#" class="small-box-footer">mas informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-mb-3 col-3">
        <div class="small-box bg-teal">
            <div class="inner">
                <h3>
                    <!--   {{ $V = 0 }}
                    @foreach ($placas as $placas) {{ $V = $V + 1 }} @endforeach -->
                    {{ $V }}
                </h3>

                <p>Placas no vigentes</p>
            </div>
            <div class="icon">
                <i class="fas fa-address-card"></i>
            </div>
            <a href="#" class="small-box-footer">mas informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-mb-3 col-3">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><!--
                {{$p = 0}}
                @foreach($poliza as $poliza)
                    {{$p = $p+1}}
                @endforeach-->
                {{$p}}
                </h3>

                <p>Polizas no vigentes</p>
            </div>
            <div class="icon">
                <i class="fas fa-lock"></i>
            </div>
            <a href="#" class="small-box-footer">mas informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-mb-3 col-3">
        <div class="small-box bg-red">
            <div class="inner">
                <h3><!--
                    {{$t =0}}
                    @foreach($tenencia as $tenencia)
                        {{$t = $t+1}}
                    @endforeach -->
                    {{$t}}
                </h3>

                <p>Tenencias no pagadas</p>
            </div>
            <div class="icon">
                <i class="far fa-calendar-alt"></i>
            </div>
            <a href="#" class="small-box-footer">mas informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-mb-3 col-3">
        <div class="small-box bg-purple">
            <div class="inner">
                <h3><!--{{$verA=0}}
                    @foreach($Va as $Va)
                        {{$verA = $verA +1}}
                    @endforeach -->
                    {{$verA}}
                </h3>

                <p>Verificacion A</p>
            </div>
            <div class="icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <a href="#" class="small-box-footer">mas informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-mb-3 col-3">
        <div class="small-box bg-teal">
            <div class="inner">
                <h3><!--{{$verB=0}}
                    @foreach($Vb as $Vb)
                        {{$verB = $verB +1}}
                    @endforeach -->
                    {{$verB}}
                </h3>

                <p>Verificacion B</p>
            </div>
            <div class="icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <a href="#" class="small-box-footer">mas informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-mb-3 col-3">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><!--{{$verF=0}}
                    @foreach($Vf as $Vf)
                        {{$verF = $verF +1}}
                    @endforeach -->
                    {{$verF}}</h3>

                <p>Verificacion Federal</p>
            </div>
            <div class="icon">
                <i class="fas fa-check-square"></i>
            </div>
            <a href="#" class="small-box-footer">mas informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-mb-3 col-3">
        <div class="small-box bg-red">
            <div class="inner">
                <h3><!--{{$fiM=0}}
                    @foreach($Fm as $Fm)
                        {{$fiM = $fiM +1}}
                    @endforeach -->
                    {{$fiM}}</h3>

                <p>Fisico Mecanico</p>
            </div>
            <div class="icon">
                <i class="fas fa-tools"></i>
            </div>
            <a href="#" class="small-box-footer">mas informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>


<div class="row">
    @foreach ($datos as $datos)
        <div class="col-4">
            <div class="card card-widget widget-user">
                
                <div class="widget-user-header bg-green">
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
                                <h5 class="description-header">{{ $datos->placas }}</h5>
                                <span class="description-text">Placas</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{ $datos->color }}</h5>
                                <span class="description-text">Color</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">{{ $datos->modelo }}</h5>
                                <span class="description-text">Modelo</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>

        </div>
    @endforeach
</div>
@stop

@section('css')

@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
