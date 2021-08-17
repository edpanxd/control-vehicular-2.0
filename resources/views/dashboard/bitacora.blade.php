@extends('adminlte::page')

@section('title', 'Dash')

@section('content_header')
    <h1>Bitacora lol</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Nina Mcintire</h3>

                        <p class="text-muted text-center">Software Engineer</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Education</strong>

                        <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                        <p class="text-muted">Malibu, California</p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                        <p class="text-muted">
                            <span class="tag tag-danger">UI Design</span>
                            <span class="tag tag-success">Coding</span>
                            <span class="tag tag-info">Javascript</span>
                            <span class="tag tag-warning">PHP</span>
                            <span class="tag tag-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim
                            neque.</p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#placas" data-toggle="tab">Placas</a></li>
                            <li class="nav-item"><a class="nav-link" href="#poliza" data-toggle="tab">Poliza</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tenencia" data-toggle="tab">Tenencia</a></li>
                            <li class="nav-item"><a class="nav-link" href="#va" data-toggle="tab">Verificacion A</a></li>
                            <li class="nav-item"><a class="nav-link" href="#vb" data-toggle="tab">Verificacion B</a></li>
                            <li class="nav-item"><a class="nav-link" href="#vf" data-toggle="tab">Verificacion federal</a></li>
                            <li class="nav-item"><a class="nav-link" href="#fm" data-toggle="tab">Fisico mecanico</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="placas">


                                <!-- Tabla placas -->
                                <p>placas</p>   


                            </div>
                            <div class="tab-pane " id="poliza">


                                <!-- Tabla poliza -->
                                <p>poliza</p>


                            </div>
                            <div class="tab-pane " id="tenencia">


                                <!-- Tablas tenencia -->
                                <p>tenencia</p>

                            </div>
                            <div class="tab-pane " id="va">


                                <!-- Tabla verificacion a -->
                                <p>verificacion a</p>

                            </div>
                            <div class="tab-pane " id="vb">


                                <!-- Tabla verificacion b -->
                                <p>verificacion b</p>

                            </div>
                            <div class="tab-pane " id="vf">


                                <!-- Tabla verificacion f -->
                                <p>verificacion f</p>

                            </div>
                            <div class="tab-pane " id="fm">


                                <!-- Tabla fisico mecanico -->
                                <p>fisico mecanico</p>

                            </div>

                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@stop

@section('css')

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
