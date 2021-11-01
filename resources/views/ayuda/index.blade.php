@extends('adminlte::page')

@section('title', 'Ayuda')

@section('content_header')
    <h1>Ayuda</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-5 col-sm-3">
            <div class="nav flex-column nav-tabs h-100 scrol" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
               <!-- <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab"
                    aria-controls="vert-tabs-home" aria-selected="true">Principal</a>-->
                <a class="nav-link active" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab"
                    aria-controls="vert-tabs-profile" aria-selected="false">Vehiculo</a>
                <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#Documentos" role="tab"
                    aria-controls="vert-tabs-messages" aria-selected="false">Documentos</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vn" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Vehiculos Nacionales</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vi" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Vehiculos Importados</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#permisos" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Permisos</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#placas" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Placas</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#tarjetas" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Tarjetas de circulacion</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#poliza" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Pólizas</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#tenencia" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Tenencias</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vea" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Verificacion Estatal A</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#veb" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Verificacion Estatal B</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vfa" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Verificacion Federal A</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vfb" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Verificacion Federal B</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#fm" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Fisico Mecanico</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#propietarios" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Propietarios anteriores</a>
                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#empresa" role="tab"
                    aria-controls="vert-tabs-settings" aria-selected="false">Empresas</a>
            </div>
        </div>
        <div class="col-7 col-sm-9">
            <div class="tab-content" id="vert-tabs-tabContent">
            <!--    <div class="tab-pane text-left fade active show" id="vert-tabs-home" role="tabpanel"
                    aria-labelledby="vert-tabs-home-tab">
                    Principal
                </div>-->
                <div class="tab-pane fade active show" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                    <h1>Campos de vehiculo</h1>

                    <h4>• Marca: </h4>
                    <p> Se refiere a la marca a la que pertenece el vehículo.</p>

                    <h4>•Submarca:</h4>
                    <p>Se refiere a la submarca</p>

                    <h4>•Tipo:</h4>
                    <p>El tipo de vehículo que es como, por ejemplo: camioneta, camión, etc.</p>

                    <h4>•Modelo:</h4>
                    <p> Es el año al que pertenece el vehículo.</p>

                    <h4>•Color:</h4>
                    <p>Es el color del que está pintado el vehículo</p>

                    <h4>•Serie:</h4>
                    <p> Un numero que sirve como identificador del vehículo.</p>

                    <h4>•Numero de motor:</h4>
                    <p>Este está representado con números o algunas veces con el país donde fue
                        elaborado.</p>

                    <h4>•Estatus:</h4>
                    <p> Nos sirve como un identificador sobre si la empresa tiene en uso el vehículo o ha
                        quedado sin uso por la empresa.</p>

                    <h4>•Uso:</h4>
                    <p> Sirve para identificar el uso que le da o dio la empresa.</p>

                    <h4>•Adquisición:</h4>
                    <p>La Forma en la que la empresa adquirida el vehículo.</p>

                    <h4>•Empresa:</h4>
                    <p>La empresa a la cual le pertenece el vehículo.</p>

                    <h4>•Foto:</h4>
                    <p> imagen del vehículo.</p>

                    <h1>Registrar un vehículo</h1>
                    <p>
                        1.- En la vista de vehículo podrá encontrar un botón el cual tiene como nombre registrar vehículo,
                        debe de oprimirlo y lo llevará a otra vista en donde se rellenará la información del vehículo.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/registrar vehiculo.jpg" alt="">
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
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <br>
                    <br>
                    <h1>Editar Vehículo.</h1>
                    <p>
                        1.- En la vista de vehículo podrá encontrar un botón el cual tiene como nombre registrar vehículo,
                        debe de oprimirlo y lo llevará a otra vista en donde se rellenará la información del vehículo.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <br>
                    <br>
                    <p>
                        2.- una vez en la vista editar todos los campos estarán llenos con la información correspondiente al
                        vehículo y nos dará la opción de editar la información de cualquier campo.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/editar vehiculo.jpg" alt="">
                    <br>
                    <br>
                    <p>
                        3. Hechos los cambios necesarios únicamente hay que oprimir nuevamente el botón registrar y
                        los datos que actualizamos serán actualizados mientras los que no se actualizaron permanecerán de la
                        misma manera.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                </div>
                <!--Fin de vehiculo -->
                <div class="tab-pane fade" id="Documentos" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                    <h1>Campos documentos</h1>
                    <p>
                    <h4>• Vehículo:</h4> Se refiere a el vehículo al cual le pertenecen esos documentos.
                    <br>
                    <h4>• Nombre del comprador:</h4> El nombre de la persona o entidad que compro el vehículo.
                    <br>
                    <h4>• Nombre del vendedor:</h4> El nombre de la persona o entidad que vendió el vehículo.
                    <br>
                    <h4>• Contrato de compraventa:</h4> Es el documento que se genera al hacer la compra.
                    <br>
                    <h4>• Carta responsiva:</h4>
                    <br>
                    <h4>• Identificación del vendedor:</h4>
                    <br>
                    <h4>• Informe repuve:</h4>
                    <br>
                    </p>
                    <h3>Registro de documento.</h3>
                    <p>
                        1.- Debe de seleccionar el botón el cual dice registro de documentos que se encuentra arriba de la
                        tabla principal.
                    </p>
                    <img src="/ayudaa/registrar documento.jpg" alt="">
                    <p>
                        2.- Una vez oprimido el botón nos redireccionara a un formulario el cual debemos llenar con los
                        datos correspondientes, En el caso de los campos de Contrato de compraventa, carta responsiva,
                        identificación del vendedor e informe repuve. Al presionar el campo se desplegará una lista con la
                        respuesta si o no en la cual debemos escoger dependiendo si contamos con ese documento o no se
                        cuenta con el documento, en caso que escojamos si se habilitara un nuevo campo el cual nos permitirá
                        introducir el documento correspondiente.
                    </p>
                    <img src="/ayudaa/formulario documentos.jpg" alt="">
                    <p>
                        3.- Ya como paso final únicamente tendremos que oprimir el botón registrar el cual se encuentra en
                        la parte inferior del formulario.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Edición de documento.</h3>
                    <p>1.- Para ir a la vista de edición se debe de oprimir el botón azul que se encuentra en la parte final
                        del registro dentro de la tabla correspondiente.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- Una vez en la vista del formulario podremos apreciar como los campos ya están llenos con la
                        información, únicamente tenemos que modificar lo que sea necesario en ese instante.
                    </p>
                    <img src="/ayudaa/editar documentos.jpg" alt="">
                    <p>3.- Para guardar los cambios únicamente se tiene que oprimir el botón de registrar y listo.</p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar documento</h3>
                    <p>
                        Para Eliminar un registro únicamente hay que presionar el botón rojo en la parte final del registro
                        el cual al presionarlo nos saldrá una alerta de precaución en donde se decidirá si quieren eliminar
                        el registro o cancelar la eliminación.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <br>
                    <img src="/ayudaa/eliminar documento.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="vn" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de vehículos nacionales.</h1>
                    <p>
                    <h4>• Vehículo:</h4>
                    <br>
                    <h4>• Numero de factura:</h4>
                    <br>
                    <h4>• Factura:</h4>
                    <br>
                    <h4>• Refactura:</h4>
                    <br>
                    <h4>• Refactura:</h4>
                    <br>
                    <h4>• Carta factura:</h4>
                    <br>
                    <h4>• Carta factura:</h4>
                    <br>
                    </p>
                    <h3>Registro de vehículo nacional.</h3>
                    <p>1.- Se debe de oprimir el botón en la parte superior el cual se llama registrar vehículo.</p>
                    <img src="/ayudaa/registrar vehiculos nacionales.jpg" alt="">
                    <p>2.- Nos aparecerá el formulario el cual debe ser llenado con los datos correspondientes.</p>
                    <img src="/ayudaa/formulario vehiculos nacionales.jpg" alt="">
                    <p>3.- Tendremos que oprimir el botón de registrar y el registro estará realizado.</p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar vehículo nacional</h3>
                    <p>
                        1.- Debemos dar click al penúltimo botón en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- En el formulario nos encontramos con el formulario lleno con la información del registro y se
                        pueden modificar los campos que sean necesario.
                    </p>
                    <img src="/ayudaa/editar vehiculos nacionales.jpg" alt="">
                    <p>
                        3.- Para guardar el registro se deberá oprimir el botón registrar.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar vehículo</h3>
                    <p>
                        Para realizar la eliminación de un registro se debe oprimir el ultimo botón del registro que aparece
                        en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <br>
                    <img src="/ayudaa/eliminar vehiculos nacionales.jpg" alt="">

                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="vi" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de vehículos importados.</h1>
                    <p>
                    <h4>• Vehículo:</h4>
                    <br>
                    <h4>• Numero de factura:</h4>
                    <br>
                    <h4>• Factura:</h4>
                    <br>
                    <h4>• Pedimiento:</h4>
                    <br>
                    <h4>• Pedimiento:</h4>
                    <br>
                    <h4>• Título de propietario:</h4>
                    <br>
                    <h4>• Título de propietario:</h4>
                    <br>
                    </p>
                    <h3>Registro de vehículo importado.</h3>
                    <p>
                        1.- Oprimir el botón de la parte superior que se llama registro vehículo.
                    </p>
                    <img src="/ayudaa/registrar vehiculos importados.jpg" alt="">
                    <p>
                        2.- En el formulario se tendrá que rellenar los campos con la información correspondiente.
                    </p>
                    <img src="/ayudaa/formulario vehiculos importados.jpg" alt="">
                    <p>
                        3.- Al finalizar se deberá oprimir el botón registrar en la parte final del formulario.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar vehículo importado.</h3>
                    <p>
                        1.- Tendremos que dar en el penúltimo botón el cual nos enviara a un formulario.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario estará lleno con la información del registro.
                    </p>
                    <img src="/ayudaa/editar vehiculos importados.jpg" alt="">
                    <p>
                        3.- Se debe dar al botón registra para actualizar el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar vehículo importado.</h3>
                    <p>
                        Se tiene que oprimir el ultimo botón del registro que se encuentra de color rojo el cual nos mandara
                        una alerta la cual debemos de aceptar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <br>
                    <img src="/ayudaa/eliminar vehiculos importados.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="permisos" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de permisos</h1>
                    <p>
                    <h4>• Vehículo:</h4>
                    <br>
                    <h4>• Numero de permiso:</h4>
                    <br>
                    <h4>• Permiso:</h4>
                    <br>
                    </p>
                    <h3>Registro de permisos.</h3>
                    <p>
                        1.- Debemos oprimir el botón de registro de permisos que se encuentra en la parte superior, llamado
                        registro de permiso.
                    </p>
                    <img src="/ayudaa/registrar permisos.jpg" alt="">
                    <p>
                        2.- Nos enviara a un formulario al cual debemos de llenar con los datos correspondientes.
                    </p>
                    <img src="/ayudaa/formulario permisos.jpg" alt="">
                    <p>
                        3.- Por último, paso debemos de oprimir el botón de registrar.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar permisos.</h3>
                    <p>
                        1.- Debemos oprimir el penúltimo botón de color azul encontrado en el registro de la tabla
                        correspondiente de permisos.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendrá el campo lleno con la información de registro y tendremos el
                        permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar permisos.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el botón de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3> Eliminar permiso</h3>
                    <p>
                        Para realizar la eliminación de un registro se debe oprimir el ultimo botón de el registro que
                        aparece en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que
                        aceptar o denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar permisos.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="placas" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos placas.</h1>
                    <p>
                    <h4>• vehículo:</h4>
                    <br>
                    <h4>• Placa:</h4>
                    <br>
                    <h4>• Entidad:</h4>
                    <br>
                    <h4>• Vencimiento:</h4>
                    <br>
                    <h4>• Alta:</h4>
                    <br>
                    <h4>• Baja:</h4>
                    <br>
                    <h4>• Estatus:</h4>
                    <br>
                    <h4>• Cambio de propietario:</h4>
                    <br>
                    <h4>• Fecha de cambio de propietario:</h4>
                    <br>
                    <h4>• Observaciones:</h4>
                    <br>
                    <h4>• PDF de las placas:</h4>
                    <br>
                    </p>
                    <h3>Registrar placa.</h3>
                    <p>1.- Se debe de seleccionar el botón llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar placas.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario de placas.jpg" alt="">
                    <p>
                        3.- Como último paso únicamente se tiene que oprimir el botón registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar placa.</h3>
                    <p>
                        1.- Se tiene que oprimir el penúltimo botón ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendrá los campos llenos con la información de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar placas.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el botón de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar placa</h3>
                    <p>
                        Para realizar la eliminación de un registro se debe oprimir el ultimo botón del registro que aparece
                        en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <br>
                    <img src="/ayudaa/eliminar placas.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="tarjetas" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos tarjetas de circulación.</h1>
                    <p>
                    <h4>• Vehículo:</h4>
                    <br>
                    <h4>• Placas:</h4>
                    <br>
                    <h4>• Inicio:</h4>
                    <br>
                    <h4>• Vencimiento:</h4>
                    <br>
                    <h4>• Estatus:</h4>
                    <br>
                    <h4>• Tarjeta de circulación:</h4>
                    <br>
                    </p>
                    <h3>Registrar tarjeta de circulación.</h3>
                    <p>
                        1.- Se tiene que oprimir el botón llamado registro de tarjeta de circulación ubicado en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar tarjeta.jpg" alt="">
                    <p>
                        2.- En el formulario se tendrán que rellenar los campos con la información correspondiente.
                    </p>
                    <img src="/ayudaa/formulario tarjeta.jpg" alt="">
                    <p>
                        3.- Para guardar el registro únicamente se tiene que presionar el botón del final llamado registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar tarjeta de circulación.</h3>
                    <p>
                        1.- Se tiene que oprimir el penúltimo botón ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendrá los campos llenos con la información de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar tarjeta.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el botón de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar tarjeta de circulación</h3>
                    <p>
                        Para realizar la eliminación de un registro se debe oprimir el ultimo botón del registro que aparece
                        en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar tarjeta.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="poliza" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de póliza</h1>
                    <p>
                    <h4>• Vehículo:</h4>
                    <br>
                    <h4>• Póliza:</h4>
                    <br>
                    <h4>• Aseguradora:</h4>
                    <br>
                    <h4>• Estatus:</h4>
                    <br>
                    <h4>• Inicio:</h4>
                    <br>
                    <h4>• Vencimiento:</h4>
                    <br>
                    <h4>• Endoso:</h4>
                    <br>
                    <h4>• PDF:</h4>
                    <br>
                    </p>
                    <h3>Registrar póliza.</h3>
                    <p>
                        1.- Se debe de seleccionar el botón llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar poliza.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario de poliza.jpg" alt="">
                    <p>
                        3.- Como último paso únicamente se tiene que oprimir el botón registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar póliza.</h3>
                    <p>
                        1.- Se tiene que oprimir el penúltimo botón ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendrá los campos llenos con la información de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar poliza.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el botón de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar póliza</h3>
                    <p>
                        Para realizar la eliminación de un registro se debe oprimir el ultimo botón del registro que aparece
                        en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar poliza.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="tenencia" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos tenencias.</h1>
                    <p>
                    <h4>• vehículo:</h4>
                    <br>
                    <h4>• Tenencia:</h4>
                    <br>
                    <h4>• Pago:</h4>
                    <br>
                    <h4>• Estatus:</h4>
                    <br>
                    <h4>• PDF:</h4>
                    <br>
                    </p>

                    <h3>Registrar tenencia.</h3>
                    <p>
                        1.- Se debe de seleccionar el botón llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar tenencia.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario tenencia.jpg" alt="">
                    <p>
                        3.- Como último paso únicamente se tiene que oprimir el botón registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/reistrar.jpg" alt="">
                    <h3>Editar tenencia.</h3>
                    <p>
                        1.- Se tiene que oprimir el penúltimo botón ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendrá los campos llenos con la información de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar tenencia.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el botón de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar tenencia</h3>
                    <p>Para realizar la eliminación de un registro se debe oprimir el ultimo botón del registro que aparece
                        en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <br>
                    <img src="/ayudaa/eliminar tenencia.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="vea" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos verificación estatal 1° Periodo.</h1>
                    <p>
                    <h4>• Vehículo:</h4>
                    <br>
                    <h4>• Placas:</h4>
                    <br>
                    <h4>• Engomado:</h4>
                    <br>
                    <h4>• Verificación:</h4>
                    <br>
                    <h4>• Fecha:</h4>
                    <br>
                    <h4>• Estatus:</h4>
                    <br>
                    <h4>• PDF:</h4>
                    <br>
                    </p>
                    <img src="/ayudaa/calendario.jpg" alt="">
                    <h3>Registrar Verificación estatal 1° periodo.</h3>
                    <p>
                        1.- Se debe de seleccionar el botón llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar verificacion estatal 1.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario verificacion estatal 1.jpg" alt="">
                    <p>
                        3.- Como último paso únicamente se tiene que oprimir el botón registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar verificación estatal 1° Periodo.</h3>
                    <p>
                        1.- Se tiene que oprimir el penúltimo botón ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendrá los campos llenos con la información de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar verificacion estatal 1.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el botón de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar verificación estatal 1° Periodo</h3>
                    <p>
                        Para realizar la eliminación de un registro se debe oprimir el ultimo botón del registro que aparece
                        en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/elimianar verificacion estatal 1.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="veb" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos verificación estatal 2° periodo.</h1>
                    <p>
                    <h4>• Vehículo:</h4>
                    <br>
                    <h4>• Placas:</h4>
                    <br>
                    <h4>• Engomado:</h4>
                    <br>
                    <h4>• Verificación:</h4>
                    <br>
                    <h4>• Fecha:</h4>
                    <br>
                    <h4>• Estatus:</h4>
                    <br>
                    <h4>• PDF:</h4>
                    <br>
                    </p>
                    <img src="/ayudaa/calendario2.jpg" alt="">
                    <h3>Registrar Verificación estatal 2° periodo.</h3>
                    <p>
                        1.- Se debe de seleccionar el botón llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar verificacion estatal 2.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario verificacion estatal 2.jpg" alt="">
                    <p>
                        3.- Como último paso únicamente se tiene que oprimir el botón registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar verificación estatal 2° periodo.</h3>
                    <p>
                        1.- Se tiene que oprimir el penúltimo botón ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendrá los campos llenos con la información de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar verificacion estatal 2.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el botón de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar verificación estatal 2° periodo</h3>
                    <p>
                        Para realizar la eliminación de un registro se debe oprimir el ultimo botón del registro que aparece
                        en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar verificacion estatal 2.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="vfa" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de verificación Federar 1° periodo.</h1>
                    <p>
                    <h4>• Vehículo:</h4>
                    <br>
                    <h4>• Placas:</h4>
                    <br>
                    <h4>• Verificación:</h4>
                    <br>
                    <h4>• Fecha:</h4>
                    <br>
                    <h4>• Estatus:</h4>
                    <br>
                    <h4>• PDF:</h4>
                    <br>
                    </p>
                    <h3>Registrar Verificación Federar 1° periodo.</h3>
                    <p>
                        1.- Se debe de seleccionar el botón llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar verificacion federal 1.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario verificacion federal 1.jpg" alt="">
                    <p>
                        3.- Como último paso únicamente se tiene que oprimir el botón registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar de verificación Federar 1° periodo.</h3>
                    <p>
                        1.- Se tiene que oprimir el penúltimo botón ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendrá los campos llenos con la información de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar verificacion federal 1.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el botón de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar de verificación Federar 1° periodo</h3>
                    <p>
                        Para realizar la eliminación de un registro se debe oprimir el ultimo botón del registro que aparece
                        en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar verificacion federal 1.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="vfb" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos verificación federal 2° periodo.</h1>
                    <p>
                    <h4>• Vehículo:</h4>
                    <br>
                    <h4>• Placas:</h4>
                    <br>
                    <h4>• Verificación:</h4>
                    <br>
                    <h4>• Fecha:</h4>
                    <br>
                    <h4>• Estatus:</h4>
                    <br>
                    <h4>• PDF:</h4>
                    <br>
                    </p>
                    <h3>Registrar Verificación federal 2° periodo.</h3>
                    <p>
                        1.- Se debe de seleccionar el botón llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar verificacion federal 2.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario verificacion federal 2.jpg" alt="">
                    <p>
                        3.- Como último paso únicamente se tiene que oprimir el botón registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar verificación federal 2° periodo.</h3>
                    <p>
                        1.- Se tiene que oprimir el penúltimo botón ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendrá los campos llenos con la información de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar verificacion federal 2.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el botón de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar verificación federal 2° periodo</h3>
                    <p>
                        Para realizar la eliminación de un registro se debe oprimir el ultimo botón del registro que aparece
                        en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar verificacion federal 2.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="fm" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos Físico mecánico.</h1>
                    <p>
                    <h4>• Vehículo:</h4>
                    <br>
                    <h4>• Placas:</h4>
                    <br>
                    <h4>• Verificación:</h4>
                    <br>
                    <h4>• Fecha:</h4>
                    <br>
                    <h4>• Estatus:</h4>
                    <br>
                    <h4>• PDF:</h4>
                    <br>
                    </p>
                    <h3>Registrar Físico mecánico.</h3>
                    <p>
                        1.- Se debe de seleccionar el botón llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar fisico mecanico.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario fisico mecanico.jpg" alt="">
                    <p>
                        3.- Como último paso únicamente se tiene que oprimir el botón registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar Físico mecánico.</h3>
                    <p>
                        1.- Se tiene que oprimir el penúltimo botón ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendrá los campos llenos con la información de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="ayudaa/editar fisico mecanico.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el botón de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar Físico mecánico.</h3>
                    <p>
                        Para realizar la eliminación de un registro se debe oprimir el ultimo botón del registro que aparece
                        en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar fisico mecanico.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="propietarios" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de propietarios anteriores.</h1>
                    <p>
                    <h4>• Vehículo:</h4>
                    <br>
                    <h4>• Vendedor:</h4>
                    <br>
                    <h4>• Identificación del vendedor:</h4>
                    <br>
                    <h4>• Comprador:</h4>
                    <br>
                    <h4>• Identificación del comprador:</h4>
                    <br>
                    </p>
                    <h3>Registrar propietarios anteriores.</h3>
                    <p>
                        1.- Se debe de seleccionar el botón llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar propietario anterior.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario propietarios anteriores.jpg" alt="">
                    <p>
                        3.- Como último paso únicamente se tiene que oprimir el botón registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar propietarios anteriores.</h3>
                    <p>
                        1.- Se tiene que oprimir el penúltimo botón ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendrá los campos llenos con la información de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayuda/editar propietarios anteriores.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el botón de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar propietarios anteriores</h3>
                    <p>
                        Para realizar la eliminación de un registro se debe oprimir el ultimo botón del registro que aparece
                        en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar propietarios anteriores.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="empresa" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de empresas.</h1>
                    <p>
                    <h4>• Nombre de la empresa:</h4>
                    <br>
                    <h4>• RFC:</h4>
                    <br>
                    </p>
                    <h3>Registrar empresas.</h3>
                    <p>
                        1.- Se debe de seleccionar el botón llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar empresas.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario empresas.jpg" alt="">
                    <p>
                        3.- Como último paso únicamente se tiene que oprimir el botón registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar empresas.</h3>
                    <p>
                        1.- Se tiene que oprimir el penúltimo botón ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendrá los campos llenos con la información de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar empresas.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el botón de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar empresas</h3>
                    <p>
                        Para realizar la eliminación de un registro se debe oprimir el ultimo botón del registro que aparece
                        en la tabla, una vez apretado el botón nos saltara una alerta en la cual se tendrá que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar empresas.jpg" alt="">
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
