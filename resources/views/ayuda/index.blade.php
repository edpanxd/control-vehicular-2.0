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
                    aria-controls="vert-tabs-settings" aria-selected="false">P??lizas</a>
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

                    <h4>??? Marca: </h4>
                    <p> Se refiere a la marca a la que pertenece el veh??culo.</p>

                    <h4>???Submarca:</h4>
                    <p>Se refiere a la submarca</p>

                    <h4>???Tipo:</h4>
                    <p>El tipo de veh??culo que es como, por ejemplo: camioneta, cami??n, etc.</p>

                    <h4>???Modelo:</h4>
                    <p> Es el a??o al que pertenece el veh??culo.</p>

                    <h4>???Color:</h4>
                    <p>Es el color del que est?? pintado el veh??culo</p>

                    <h4>???Serie:</h4>
                    <p> Un numero que sirve como identificador del veh??culo.</p>

                    <h4>???Numero de motor:</h4>
                    <p>Este est?? representado con n??meros o algunas veces con el pa??s donde fue
                        elaborado.</p>

                    <h4>???Estatus:</h4>
                    <p> Nos sirve como un identificador sobre si la empresa tiene en uso el veh??culo o ha
                        quedado sin uso por la empresa.</p>

                    <h4>???Uso:</h4>
                    <p> Sirve para identificar el uso que le da o dio la empresa.</p>

                    <h4>???Adquisici??n:</h4>
                    <p>La Forma en la que la empresa adquirida el veh??culo.</p>

                    <h4>???Empresa:</h4>
                    <p>La empresa a la cual le pertenece el veh??culo.</p>

                    <h4>???Foto:</h4>
                    <p> imagen del veh??culo.</p>

                    <h1>Registrar un veh??culo</h1>
                    <p>
                        1.- En la vista de veh??culo podr?? encontrar un bot??n el cual tiene como nombre registrar veh??culo,
                        debe de oprimirlo y lo llevar?? a otra vista en donde se rellenar?? la informaci??n del veh??culo.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/registrar vehiculo.jpg" alt="">
                    <br>
                    <br>

                    <p> 2. En el formulario debe llenar todos los campos con la informaci??n correspondiente.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/formulario vehiculo.jpg" alt="">
                    <br>
                    <br>
                    <p> 3.- Una vez los datos del veh??culo sean colocados en su respectivo campo ??nicamente se tendr?? que
                        oprimir el bot??n de registrar y el registro se realizara, y nos redireccionara a la vista principal
                        y podremos apreciar el registro en una tabla.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <br>
                    <br>
                    <h1>Editar Veh??culo.</h1>
                    <p>
                        1.- En la vista de veh??culo podr?? encontrar un bot??n el cual tiene como nombre registrar veh??culo,
                        debe de oprimirlo y lo llevar?? a otra vista en donde se rellenar?? la informaci??n del veh??culo.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <br>
                    <br>
                    <p>
                        2.- una vez en la vista editar todos los campos estar??n llenos con la informaci??n correspondiente al
                        veh??culo y nos dar?? la opci??n de editar la informaci??n de cualquier campo.
                        <br>
                        <br>
                    </p>
                    <img src="/ayudaa/editar vehiculo.jpg" alt="">
                    <br>
                    <br>
                    <p>
                        3. Hechos los cambios necesarios ??nicamente hay que oprimir nuevamente el bot??n registrar y
                        los datos que actualizamos ser??n actualizados mientras los que no se actualizaron permanecer??n de la
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
                    <h4>??? Veh??culo:</h4> Se refiere a el veh??culo al cual le pertenecen esos documentos.
                    <br>
                    <h4>??? Nombre del comprador:</h4> El nombre de la persona o entidad que compro el veh??culo.
                    <br>
                    <h4>??? Nombre del vendedor:</h4> El nombre de la persona o entidad que vendi?? el veh??culo.
                    <br>
                    <h4>??? Contrato de compraventa:</h4> Es el documento que se genera al hacer la compra.
                    <br>
                    <h4>??? Carta responsiva:</h4>
                    <br>
                    <h4>??? Identificaci??n del vendedor:</h4>
                    <br>
                    <h4>??? Informe repuve:</h4>
                    <br>
                    </p>
                    <h3>Registro de documento.</h3>
                    <p>
                        1.- Debe de seleccionar el bot??n el cual dice registro de documentos que se encuentra arriba de la
                        tabla principal.
                    </p>
                    <img src="/ayudaa/registrar documento.jpg" alt="">
                    <p>
                        2.- Una vez oprimido el bot??n nos redireccionara a un formulario el cual debemos llenar con los
                        datos correspondientes, En el caso de los campos de Contrato de compraventa, carta responsiva,
                        identificaci??n del vendedor e informe repuve. Al presionar el campo se desplegar?? una lista con la
                        respuesta si o no en la cual debemos escoger dependiendo si contamos con ese documento o no se
                        cuenta con el documento, en caso que escojamos si se habilitara un nuevo campo el cual nos permitir??
                        introducir el documento correspondiente.
                    </p>
                    <img src="/ayudaa/formulario documentos.jpg" alt="">
                    <p>
                        3.- Ya como paso final ??nicamente tendremos que oprimir el bot??n registrar el cual se encuentra en
                        la parte inferior del formulario.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Edici??n de documento.</h3>
                    <p>1.- Para ir a la vista de edici??n se debe de oprimir el bot??n azul que se encuentra en la parte final
                        del registro dentro de la tabla correspondiente.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- Una vez en la vista del formulario podremos apreciar como los campos ya est??n llenos con la
                        informaci??n, ??nicamente tenemos que modificar lo que sea necesario en ese instante.
                    </p>
                    <img src="/ayudaa/editar documentos.jpg" alt="">
                    <p>3.- Para guardar los cambios ??nicamente se tiene que oprimir el bot??n de registrar y listo.</p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar documento</h3>
                    <p>
                        Para Eliminar un registro ??nicamente hay que presionar el bot??n rojo en la parte final del registro
                        el cual al presionarlo nos saldr?? una alerta de precauci??n en donde se decidir?? si quieren eliminar
                        el registro o cancelar la eliminaci??n.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <br>
                    <img src="/ayudaa/eliminar documento.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="vn" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de veh??culos nacionales.</h1>
                    <p>
                    <h4>??? Veh??culo:</h4>
                    <br>
                    <h4>??? Numero de factura:</h4>
                    <br>
                    <h4>??? Factura:</h4>
                    <br>
                    <h4>??? Refactura:</h4>
                    <br>
                    <h4>??? Refactura:</h4>
                    <br>
                    <h4>??? Carta factura:</h4>
                    <br>
                    <h4>??? Carta factura:</h4>
                    <br>
                    </p>
                    <h3>Registro de veh??culo nacional.</h3>
                    <p>1.- Se debe de oprimir el bot??n en la parte superior el cual se llama registrar veh??culo.</p>
                    <img src="/ayudaa/registrar vehiculos nacionales.jpg" alt="">
                    <p>2.- Nos aparecer?? el formulario el cual debe ser llenado con los datos correspondientes.</p>
                    <img src="/ayudaa/formulario vehiculos nacionales.jpg" alt="">
                    <p>3.- Tendremos que oprimir el bot??n de registrar y el registro estar?? realizado.</p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar veh??culo nacional</h3>
                    <p>
                        1.- Debemos dar click al pen??ltimo bot??n en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- En el formulario nos encontramos con el formulario lleno con la informaci??n del registro y se
                        pueden modificar los campos que sean necesario.
                    </p>
                    <img src="/ayudaa/editar vehiculos nacionales.jpg" alt="">
                    <p>
                        3.- Para guardar el registro se deber?? oprimir el bot??n registrar.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar veh??culo</h3>
                    <p>
                        Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n del registro que aparece
                        en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <br>
                    <img src="/ayudaa/eliminar vehiculos nacionales.jpg" alt="">

                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="vi" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de veh??culos importados.</h1>
                    <p>
                    <h4>??? Veh??culo:</h4>
                    <br>
                    <h4>??? Numero de factura:</h4>
                    <br>
                    <h4>??? Factura:</h4>
                    <br>
                    <h4>??? Pedimiento:</h4>
                    <br>
                    <h4>??? Pedimiento:</h4>
                    <br>
                    <h4>??? T??tulo de propietario:</h4>
                    <br>
                    <h4>??? T??tulo de propietario:</h4>
                    <br>
                    </p>
                    <h3>Registro de veh??culo importado.</h3>
                    <p>
                        1.- Oprimir el bot??n de la parte superior que se llama registro veh??culo.
                    </p>
                    <img src="/ayudaa/registrar vehiculos importados.jpg" alt="">
                    <p>
                        2.- En el formulario se tendr?? que rellenar los campos con la informaci??n correspondiente.
                    </p>
                    <img src="/ayudaa/formulario vehiculos importados.jpg" alt="">
                    <p>
                        3.- Al finalizar se deber?? oprimir el bot??n registrar en la parte final del formulario.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar veh??culo importado.</h3>
                    <p>
                        1.- Tendremos que dar en el pen??ltimo bot??n el cual nos enviara a un formulario.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario estar?? lleno con la informaci??n del registro.
                    </p>
                    <img src="/ayudaa/editar vehiculos importados.jpg" alt="">
                    <p>
                        3.- Se debe dar al bot??n registra para actualizar el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar veh??culo importado.</h3>
                    <p>
                        Se tiene que oprimir el ultimo bot??n del registro que se encuentra de color rojo el cual nos mandara
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
                    <h4>??? Veh??culo:</h4>
                    <br>
                    <h4>??? Numero de permiso:</h4>
                    <br>
                    <h4>??? Permiso:</h4>
                    <br>
                    </p>
                    <h3>Registro de permisos.</h3>
                    <p>
                        1.- Debemos oprimir el bot??n de registro de permisos que se encuentra en la parte superior, llamado
                        registro de permiso.
                    </p>
                    <img src="/ayudaa/registrar permisos.jpg" alt="">
                    <p>
                        2.- Nos enviara a un formulario al cual debemos de llenar con los datos correspondientes.
                    </p>
                    <img src="/ayudaa/formulario permisos.jpg" alt="">
                    <p>
                        3.- Por ??ltimo, paso debemos de oprimir el bot??n de registrar.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar permisos.</h3>
                    <p>
                        1.- Debemos oprimir el pen??ltimo bot??n de color azul encontrado en el registro de la tabla
                        correspondiente de permisos.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendr?? el campo lleno con la informaci??n de registro y tendremos el
                        permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar permisos.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el bot??n de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3> Eliminar permiso</h3>
                    <p>
                        Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n de el registro que
                        aparece en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que
                        aceptar o denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar permisos.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="placas" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos placas.</h1>
                    <p>
                    <h4>??? veh??culo:</h4>
                    <br>
                    <h4>??? Placa:</h4>
                    <br>
                    <h4>??? Entidad:</h4>
                    <br>
                    <h4>??? Vencimiento:</h4>
                    <br>
                    <h4>??? Alta:</h4>
                    <br>
                    <h4>??? Baja:</h4>
                    <br>
                    <h4>??? Estatus:</h4>
                    <br>
                    <h4>??? Cambio de propietario:</h4>
                    <br>
                    <h4>??? Fecha de cambio de propietario:</h4>
                    <br>
                    <h4>??? Observaciones:</h4>
                    <br>
                    <h4>??? PDF de las placas:</h4>
                    <br>
                    </p>
                    <h3>Registrar placa.</h3>
                    <p>1.- Se debe de seleccionar el bot??n llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar placas.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario de placas.jpg" alt="">
                    <p>
                        3.- Como ??ltimo paso ??nicamente se tiene que oprimir el bot??n registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar placa.</h3>
                    <p>
                        1.- Se tiene que oprimir el pen??ltimo bot??n ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendr?? los campos llenos con la informaci??n de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar placas.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el bot??n de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar placa</h3>
                    <p>
                        Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n del registro que aparece
                        en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <br>
                    <img src="/ayudaa/eliminar placas.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="tarjetas" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos tarjetas de circulaci??n.</h1>
                    <p>
                    <h4>??? Veh??culo:</h4>
                    <br>
                    <h4>??? Placas:</h4>
                    <br>
                    <h4>??? Inicio:</h4>
                    <br>
                    <h4>??? Vencimiento:</h4>
                    <br>
                    <h4>??? Estatus:</h4>
                    <br>
                    <h4>??? Tarjeta de circulaci??n:</h4>
                    <br>
                    </p>
                    <h3>Registrar tarjeta de circulaci??n.</h3>
                    <p>
                        1.- Se tiene que oprimir el bot??n llamado registro de tarjeta de circulaci??n ubicado en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar tarjeta.jpg" alt="">
                    <p>
                        2.- En el formulario se tendr??n que rellenar los campos con la informaci??n correspondiente.
                    </p>
                    <img src="/ayudaa/formulario tarjeta.jpg" alt="">
                    <p>
                        3.- Para guardar el registro ??nicamente se tiene que presionar el bot??n del final llamado registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar tarjeta de circulaci??n.</h3>
                    <p>
                        1.- Se tiene que oprimir el pen??ltimo bot??n ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendr?? los campos llenos con la informaci??n de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar tarjeta.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el bot??n de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar tarjeta de circulaci??n</h3>
                    <p>
                        Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n del registro que aparece
                        en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar tarjeta.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="poliza" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de p??liza</h1>
                    <p>
                    <h4>??? Veh??culo:</h4>
                    <br>
                    <h4>??? P??liza:</h4>
                    <br>
                    <h4>??? Aseguradora:</h4>
                    <br>
                    <h4>??? Estatus:</h4>
                    <br>
                    <h4>??? Inicio:</h4>
                    <br>
                    <h4>??? Vencimiento:</h4>
                    <br>
                    <h4>??? Endoso:</h4>
                    <br>
                    <h4>??? PDF:</h4>
                    <br>
                    </p>
                    <h3>Registrar p??liza.</h3>
                    <p>
                        1.- Se debe de seleccionar el bot??n llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar poliza.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario de poliza.jpg" alt="">
                    <p>
                        3.- Como ??ltimo paso ??nicamente se tiene que oprimir el bot??n registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar p??liza.</h3>
                    <p>
                        1.- Se tiene que oprimir el pen??ltimo bot??n ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendr?? los campos llenos con la informaci??n de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar poliza.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el bot??n de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar p??liza</h3>
                    <p>
                        Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n del registro que aparece
                        en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar poliza.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="tenencia" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos tenencias.</h1>
                    <p>
                    <h4>??? veh??culo:</h4>
                    <br>
                    <h4>??? Tenencia:</h4>
                    <br>
                    <h4>??? Pago:</h4>
                    <br>
                    <h4>??? Estatus:</h4>
                    <br>
                    <h4>??? PDF:</h4>
                    <br>
                    </p>

                    <h3>Registrar tenencia.</h3>
                    <p>
                        1.- Se debe de seleccionar el bot??n llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar tenencia.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario tenencia.jpg" alt="">
                    <p>
                        3.- Como ??ltimo paso ??nicamente se tiene que oprimir el bot??n registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/reistrar.jpg" alt="">
                    <h3>Editar tenencia.</h3>
                    <p>
                        1.- Se tiene que oprimir el pen??ltimo bot??n ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendr?? los campos llenos con la informaci??n de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar tenencia.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el bot??n de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar tenencia</h3>
                    <p>Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n del registro que aparece
                        en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <br>
                    <img src="/ayudaa/eliminar tenencia.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="vea" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos verificaci??n estatal 1?? Periodo.</h1>
                    <p>
                    <h4>??? Veh??culo:</h4>
                    <br>
                    <h4>??? Placas:</h4>
                    <br>
                    <h4>??? Engomado:</h4>
                    <br>
                    <h4>??? Verificaci??n:</h4>
                    <br>
                    <h4>??? Fecha:</h4>
                    <br>
                    <h4>??? Estatus:</h4>
                    <br>
                    <h4>??? PDF:</h4>
                    <br>
                    </p>
                    <img src="/ayudaa/calendario.jpg" alt="">
                    <h3>Registrar Verificaci??n estatal 1?? periodo.</h3>
                    <p>
                        1.- Se debe de seleccionar el bot??n llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar verificacion estatal 1.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario verificacion estatal 1.jpg" alt="">
                    <p>
                        3.- Como ??ltimo paso ??nicamente se tiene que oprimir el bot??n registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar verificaci??n estatal 1?? Periodo.</h3>
                    <p>
                        1.- Se tiene que oprimir el pen??ltimo bot??n ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendr?? los campos llenos con la informaci??n de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar verificacion estatal 1.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el bot??n de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar verificaci??n estatal 1?? Periodo</h3>
                    <p>
                        Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n del registro que aparece
                        en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/elimianar verificacion estatal 1.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="veb" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos verificaci??n estatal 2?? periodo.</h1>
                    <p>
                    <h4>??? Veh??culo:</h4>
                    <br>
                    <h4>??? Placas:</h4>
                    <br>
                    <h4>??? Engomado:</h4>
                    <br>
                    <h4>??? Verificaci??n:</h4>
                    <br>
                    <h4>??? Fecha:</h4>
                    <br>
                    <h4>??? Estatus:</h4>
                    <br>
                    <h4>??? PDF:</h4>
                    <br>
                    </p>
                    <img src="/ayudaa/calendario2.jpg" alt="">
                    <h3>Registrar Verificaci??n estatal 2?? periodo.</h3>
                    <p>
                        1.- Se debe de seleccionar el bot??n llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar verificacion estatal 2.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario verificacion estatal 2.jpg" alt="">
                    <p>
                        3.- Como ??ltimo paso ??nicamente se tiene que oprimir el bot??n registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar verificaci??n estatal 2?? periodo.</h3>
                    <p>
                        1.- Se tiene que oprimir el pen??ltimo bot??n ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendr?? los campos llenos con la informaci??n de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar verificacion estatal 2.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el bot??n de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar verificaci??n estatal 2?? periodo</h3>
                    <p>
                        Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n del registro que aparece
                        en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar verificacion estatal 2.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="vfa" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de verificaci??n Federar 1?? periodo.</h1>
                    <p>
                    <h4>??? Veh??culo:</h4>
                    <br>
                    <h4>??? Placas:</h4>
                    <br>
                    <h4>??? Verificaci??n:</h4>
                    <br>
                    <h4>??? Fecha:</h4>
                    <br>
                    <h4>??? Estatus:</h4>
                    <br>
                    <h4>??? PDF:</h4>
                    <br>
                    </p>
                    <h3>Registrar Verificaci??n Federar 1?? periodo.</h3>
                    <p>
                        1.- Se debe de seleccionar el bot??n llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar verificacion federal 1.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario verificacion federal 1.jpg" alt="">
                    <p>
                        3.- Como ??ltimo paso ??nicamente se tiene que oprimir el bot??n registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar de verificaci??n Federar 1?? periodo.</h3>
                    <p>
                        1.- Se tiene que oprimir el pen??ltimo bot??n ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendr?? los campos llenos con la informaci??n de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar verificacion federal 1.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el bot??n de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar de verificaci??n Federar 1?? periodo</h3>
                    <p>
                        Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n del registro que aparece
                        en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar verificacion federal 1.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="vfb" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos verificaci??n federal 2?? periodo.</h1>
                    <p>
                    <h4>??? Veh??culo:</h4>
                    <br>
                    <h4>??? Placas:</h4>
                    <br>
                    <h4>??? Verificaci??n:</h4>
                    <br>
                    <h4>??? Fecha:</h4>
                    <br>
                    <h4>??? Estatus:</h4>
                    <br>
                    <h4>??? PDF:</h4>
                    <br>
                    </p>
                    <h3>Registrar Verificaci??n federal 2?? periodo.</h3>
                    <p>
                        1.- Se debe de seleccionar el bot??n llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar verificacion federal 2.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario verificacion federal 2.jpg" alt="">
                    <p>
                        3.- Como ??ltimo paso ??nicamente se tiene que oprimir el bot??n registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar verificaci??n federal 2?? periodo.</h3>
                    <p>
                        1.- Se tiene que oprimir el pen??ltimo bot??n ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendr?? los campos llenos con la informaci??n de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar verificacion federal 2.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el bot??n de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar verificaci??n federal 2?? periodo</h3>
                    <p>
                        Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n del registro que aparece
                        en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar verificacion federal 2.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="fm" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos F??sico mec??nico.</h1>
                    <p>
                    <h4>??? Veh??culo:</h4>
                    <br>
                    <h4>??? Placas:</h4>
                    <br>
                    <h4>??? Verificaci??n:</h4>
                    <br>
                    <h4>??? Fecha:</h4>
                    <br>
                    <h4>??? Estatus:</h4>
                    <br>
                    <h4>??? PDF:</h4>
                    <br>
                    </p>
                    <h3>Registrar F??sico mec??nico.</h3>
                    <p>
                        1.- Se debe de seleccionar el bot??n llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar fisico mecanico.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario fisico mecanico.jpg" alt="">
                    <p>
                        3.- Como ??ltimo paso ??nicamente se tiene que oprimir el bot??n registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar F??sico mec??nico.</h3>
                    <p>
                        1.- Se tiene que oprimir el pen??ltimo bot??n ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendr?? los campos llenos con la informaci??n de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="ayudaa/editar fisico mecanico.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el bot??n de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar F??sico mec??nico.</h3>
                    <p>
                        Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n del registro que aparece
                        en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar fisico mecanico.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="propietarios" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de propietarios anteriores.</h1>
                    <p>
                    <h4>??? Veh??culo:</h4>
                    <br>
                    <h4>??? Vendedor:</h4>
                    <br>
                    <h4>??? Identificaci??n del vendedor:</h4>
                    <br>
                    <h4>??? Comprador:</h4>
                    <br>
                    <h4>??? Identificaci??n del comprador:</h4>
                    <br>
                    </p>
                    <h3>Registrar propietarios anteriores.</h3>
                    <p>
                        1.- Se debe de seleccionar el bot??n llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar propietario anterior.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario propietarios anteriores.jpg" alt="">
                    <p>
                        3.- Como ??ltimo paso ??nicamente se tiene que oprimir el bot??n registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar propietarios anteriores.</h3>
                    <p>
                        1.- Se tiene que oprimir el pen??ltimo bot??n ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendr?? los campos llenos con la informaci??n de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayuda/editar propietarios anteriores.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el bot??n de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar propietarios anteriores</h3>
                    <p>
                        Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n del registro que aparece
                        en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que aceptar o
                        denegar dependiendo de lo que se quiera realizar.
                    </p>
                    <img src="/ayudaa/eliminar.jpg" alt="">
                    <img src="/ayudaa/eliminar propietarios anteriores.jpg" alt="">
                </div>
                <!--Fin-->
                <div class="tab-pane fade" id="empresa" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                    <h1>Campos de empresas.</h1>
                    <p>
                    <h4>??? Nombre de la empresa:</h4>
                    <br>
                    <h4>??? RFC:</h4>
                    <br>
                    </p>
                    <h3>Registrar empresas.</h3>
                    <p>
                        1.- Se debe de seleccionar el bot??n llamado registro de placas el cual se encuentra en la parte
                        superior arriba de la tabla de registros.
                    </p>
                    <img src="/ayudaa/registrar empresas.jpg" alt="">
                    <p>
                        2.- Una vez ya en el formulario se debe llenar todos los campos que el formulario solicita.
                    </p>
                    <img src="/ayudaa/formulario empresas.jpg" alt="">
                    <p>
                        3.- Como ??ltimo paso ??nicamente se tiene que oprimir el bot??n registrar y se guardara el registro.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Editar empresas.</h3>
                    <p>
                        1.- Se tiene que oprimir el pen??ltimo bot??n ubicado en el registro de la tabla.
                    </p>
                    <img src="/ayudaa/editar.jpg" alt="">
                    <p>
                        2.- El formulario que aparezca tendr?? los campos llenos con la informaci??n de registro y tendremos
                        el permiso de poder modificarlo, de la manera que queramos.
                    </p>
                    <img src="/ayudaa/editar empresas.jpg" alt="">
                    <p>
                        3.- Para finalizar tendremos que oprimir el bot??n de registro y se actualizara.
                    </p>
                    <img src="/ayudaa/registrar.jpg" alt="">
                    <h3>Eliminar empresas</h3>
                    <p>
                        Para realizar la eliminaci??n de un registro se debe oprimir el ultimo bot??n del registro que aparece
                        en la tabla, una vez apretado el bot??n nos saltara una alerta en la cual se tendr?? que aceptar o
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
