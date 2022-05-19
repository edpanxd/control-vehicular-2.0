@extends('adminlte::page')

@section('title', 'Perfiles')

@section('content_header')
    <h1>Vehiculos</h1>
@stop

@section('content')
<div class="form-group col-12">
    <label for="" class="form-label">Buscador</label>
    <input type="text" class="form-control pull-right" style="width:40%" id="search" placeholder="Buscar vehiculo...">
</div>
<div class="row">
    @foreach ($datos as $datos)
        <div class="col-lg-4 col-mb-4 col-sm-12 cajapadre" style="display: block">
            <div class="card card-widget widget-user">
                <div class="comida">
                    <div class="widget-user-header bg-navy">
                        <h3 class="widget-user-username">{{ $datos->marca }}</h3>
                        <h5 class="widget-user-desc">{{ $datos->submarca }}</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" style="width: 90px; height: 90px; object-fit: cover;"
                            src="/imagen/{{ $datos->imagen }}" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-2 border-right mb-4">
                                <div class="description-block">
                                    <h5 class="description-header">{{ $datos->id }}</h5>
                                    <span class="description-text">ID</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6 border-right mb-4">
                                <div class="description-block">
                                    <h5 class="description-header">{{ $datos->serie }}</h5>
                                    <span class="description-text">Serie</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <div class="col-sm-4  mb-4">
                                <div class="description-block">
                                    <h5 class="description-header">{{ $datos->uso }}</h5>
                                    <span class="description-text">Uso</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->

                            <!-- /.col -->
                            <div class="col-sm-12">
                                <a href="/dashboardvh/{{ $datos->id }}" class="btn btn-default bg-maroon">Perfil de
                                    vehículo. </a>
                            </div>

                        </div>
                        <!-- /.row -->

                    </div>

                </div>

            </div>
        </div>
    @endforeach

</div>
@stop

@section('css')
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
   
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
     <script>
        $(document).ready(function() {
            $("#search").keyup(function() {
                _this = this;

                $.each($(".cajapadre "), function() {
                    if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                        $(this).css({
                            'display': 'none'
                        });
                    else
                        $(this).css({
                            "display": "block"
                        });
                });
            });

        });
    </script>
@stop
