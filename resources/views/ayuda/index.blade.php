@extends('adminlte::page')

@section('title', 'Ayuda')

@section('content_header')
    <h1>Ayuda</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-5 col-sm-3">
            <div class="nav flex-column nav-tabs h-100 scrol" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab"
                    aria-controls="vert-tabs-home" aria-selected="true">Principal</a>
                <a class="nav-link " id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab"
                    aria-controls="vert-tabs-profile" aria-selected="false">Vehiculo</a>
                <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages"
                    role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Documentos</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Vehiculos Nacionales</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Vehiculos Importados</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Permisos</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Placas</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Tarjetas de circulacion</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Polizas</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Tenencias</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Verificacion Estatal A</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Verificacion Estatal B</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Verificacion Federla A</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Verificacion Federla B</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Fisico Mecanico</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Propietarios anteriores</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                    role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Empresas</a>
            </div>
        </div>
        <div class="col-7 col-sm-9">
            <div class="tab-content" id="vert-tabs-tabContent">
                <div class="tab-pane text-left fade active show" id="vert-tabs-home" role="tabpanel"
                    aria-labelledby="vert-tabs-home-tab">
                    Principal 
                </div>
                <div class="tab-pane fade " id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                    <h1>Campos de vehiculo</h1>
                    <p>
                        <b>• Marca: </b>Se refiere a la marca a la que pertenece el vehículo.
                        <br>
                        <b>•Submarca:</b> Se refiere a la submarca
                        <br>
                        <b>•Tipo:</b> El tipo de vehículo que es como, por ejemplo: camioneta, camión, etc.
                        <br>
                        <b>•Modelo:</b> Es el año al que pertenece el vehículo.
                        <br>
                        <b>•Color:</b> Es el color del que está pintado el vehículo
                        <br>
                        <b>•Serie:</b> Un numero que sirve como identificador del vehículo.
                        <br>
                        <b>•Numero de motor:</b> Este está representado con números o algunas veces con el país donde fue
                        elaborado.
                        <br>
                        <b>•Estatus:</b> Nos sirve como un identificador sobre si la empresa tiene en uso el vehículo o ha
                        quedado
                        sin uso por la empresa.
                        <br>
                        <b>•Uso:</b> Sirve para identificar el uso que le da o dio la empresa.
                        <br>
                        <b>•Adquisición:</b> La Forma en la que la empresa adquirida el vehículo.
                        <br>
                        <b>•Empresa:</b> La empresa a la cual le pertenece el vehículo.
                        <br>
                        <b>•Foto:</b> imagen del vehículo.
                    </p>
                    <h1>Registrar un vehículo</h1>
                    <p>
                        1.- En la vista de vehículo podrá encontrar un botón el cual tiene como nombre registrar vehículo,
                        debe de oprimirlo y lo llevará a otra vista en donde se rellenará la información del vehículo.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/registo de vehicolo.jpg" alt="">
                    <br>
                    <br>

                    <p> 2. En el formulario debe llenar todos los campos con la información correspondiente.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/formulario vehiculo.jpg" alt="">
                    <br>
                    <br>
                    <p> 3.- Una vez los datos del vehículo sean colocados en su respectivo campo únicamente se tendrá que
                        oprimir el botón de registrar y el registro se realizara, y nos redireccionara a la vista principal
                        y podremos apreciar el registro en una tabla.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/boton registrar vehiculo.jpg" alt="">
                    <br>
                    <br>
                    <h1>Editar Vehículo.</h1>
                    <p>
                        1.- En la vista de vehículo podrá encontrar un botón el cual tiene como nombre registrar vehículo,
                        debe de oprimirlo y lo llevará a otra vista en donde se rellenará la información del vehículo.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/editar vehiculo.jpg" alt="">
                    <br>
                    <br>
                    <p>
                        2.- una vez en la vista editar todos los campos estarán llenos con la información correspondiente al
                        vehículo y nos dará la opción de editar la información de cualquier campo.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/form edid vehiculo.jpg" alt="">
                    <br>
                    <br>
                    <p>
                        3. Hechos los cambios necesarios únicamente hay que oprimir nuevamente el botón registrar y
                        los datos que actualizamos serán actualizados mientras los que no se actualizaron permanecerán de la
                        misma manera.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/actualizar vehiculo.jpg" alt="">
                </div>
                <!--Fin de vehiculo -->
                <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel"
                    aria-labelledby="vert-tabs-messages-tab">
                    bay
                </div>
                <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel"
                    aria-labelledby="vert-tabs-settings-tab">
                    chao
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div>
            <br>
            <br>
        </div>
    </footer>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
@stop
