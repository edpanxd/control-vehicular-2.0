<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-mx" lang="es-mx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CÉDULA DE CONTROL VEHÍCULAR</title>
    <meta name="author" content="" />
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            text-indent: 0;
        }

        .s1 {
            color: #FFF;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s2 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        table,
        tbody {
            vertical-align: top;
            overflow: visible;
        }

    </style>
</head>

<body>
    <div class="row">
        <div class="col-2" style="margin: 5px 1em 0 auto;"></div>
        <div class="col-8" style="margin: 5px 1em 0 auto;">

            <table style="border-collapse:collapse;margin-left:9.25pt" cellspacing="0">
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#404040">
                        <p class="s1"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            CÉDULA VEHICULAR</p>
                    </td>
                </tr>
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#BEBEBE">
                        <p class="s2"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            DATOS GENERALES</p>
                    </td>
                </tr>
                @foreach ($vehiculo as $vehiculo)


                    <tr style="height:20pt">
                        <td
                            style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                UNIDAD: {{ $vehiculo->marca }}</p>
                        </td>
                        <td
                            style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">No.
                                ECONOMICO: {{ $vehiculo->id }}</p>
                        </td>
                    </tr>
                    <tr style="height:20pt">
                        <td
                            style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">MARCA:
                                {{ $vehiculo->marca }}</p>
                        </td>
                        <td
                            style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NUMERO
                                DE SERIE: {{ $vehiculo->serie }}</p>
                        </td>
                    </tr>
                    <tr style="height:20pt">
                        <td
                            style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                SUBMARCA: {{ $vehiculo->submarca }}</p>
                        </td>
                        <td
                            style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                NUMERO DE MOTOR: {{ $vehiculo->numeroM }}</p>
                        </td>
                    </tr>
                    <tr style="height:20pt">
                        <td
                            style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">AÑO:
                                {{ $vehiculo->modelo }}</p>
                        </td>
                        <td
                        style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        CAPACIDAD DE CARGA
                        </p>
                    </td>
                    </tr>
                    <tr style="height:20pt">
                        <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                            colspan="2" bgcolor="#BEBEBE">
                            <p class="s2"
                                style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                                DATOS DEL VEHICULO</p>
                        </td>
                    </tr>
                    <tr style="height:20pt">
                        <td
                            style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">TIPO
                                DE USO: {{ $vehiculo->uso }}</p>
                        </td>
                        <td
                            style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                ADQUISICION: {{ $vehiculo->adquisicion }}</p>
                        </td>
                    </tr>
                    <tr style="height:20pt">
                        <td
                            style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">TIPO
                                DE VEHICULO: {{ $vehiculo->tipo }}</p>
                        </td>
                @endforeach
                <td
                    style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">


                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                    </p>
                </td>
                </tr>
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#BEBEBE">
                        <p class="s2"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            DOCUMENTOS DE PROPIEDAD</p>
                    </td>
                </tr>

                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NOMBRE O
                            RAZON SOCIAL: {{ $vehiculo->empresa }}</p>
                    </td>
                </tr>



                <tr style="height:20pt">

                    <td
                        style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        @foreach ($empresa as $empresa)
                            @if ($empresa->empresa == $vehiculo->empresa)
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    RFC: {{ $empresa->rfc }}</p>
                            @endif
                        @endforeach
                    </td>

                    <td
                        style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                </tr>

                <tr style="height:20pt">
                    <td
                        style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            VEHICULO NACIONAL</p>
                    </td>
                    <td
                        style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            VEHICULO IMPORTADO
                        </p>
                    </td>

                </tr>
                @if (count($Vehiculos_T) < 2)
                    @foreach ($Vehiculos_T as $Vehiculos_T)

                        <tr style="height:20pt">
                            @if (count($estatus)<=3)
                                <td
                                    style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                    <p class="s2"
                                        style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                        No. FACTURA: {{ $Vehiculos_T->no_factura }}</p>
                                </td>
                                <td
                                    style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                    <p class="s2"
                                        style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                       
                                    </p>
                                </td>
                            @else
                                <td
                                    style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                    <p class="s2"
                                        style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                        </p>
                                </td>
                                <td
                                    style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                    <p class="s2"
                                        style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                        No. FACTURA: {{ $Vehiculos_T->no_factura }}
                                    </p>
                                </td>
                            @endif

                        </tr>
                        <tr style="height:20pt">
                            @if (count($estatus) <= 3)
                                <td
                                    style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                    <p class="s2"
                                        style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                        REFACTURADO: {{ $Vehiculos_T->refactura }}</p>
                                </td>
                                <td
                                    style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                    <p class="s2"
                                        style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                        
                                    </p>
                                </td>
                            @else
                                <td
                                    style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                    <p class="s2"
                                        style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                       </p>
                                </td>
                                <td
                                    style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                    <p class="s2"
                                        style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                        PEDIMENTO: {{ $Vehiculos_T->pedimiento }}
                                    </p>
                                </td>

                            @endif

                        </tr>
                        <tr style="height:20pt">
                            @if (count($estatus) <= 3)
                                <td
                                    style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                    <p class="s2"
                                        style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                        CARTA FACTURA {{ $Vehiculos_T->carta_fa }}</p>
                                </td>
                                <td
                                    style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                    <p class="s2"
                                        style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                        
                                    </p>
                                </td>
                            @else
                                <td
                                    style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                    <p class="s2"
                                        style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                         </p>
                                </td>
                                <td
                                    style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                    <p class="s2"
                                        style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                        TITULO PROPIETARIO: {{ $Vehiculos_T->titulo_pro }}
                                    </p>
                                </td>
                            @endif

                        </tr>
                    @endforeach
                @endif


                <tr style="height:69pt">
                    <td
                        style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s2"
                            style="padding-left: 5pt;padding-right: 183pt;text-indent: 0pt;line-height: 200%;text-align: left;">
                            VENDEDOR:</p>
                        <p class="s2"
                            style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COMPRADOR:
                        </p>
                    </td>
                    <td
                        style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s2"
                            style="padding-left: 5pt;padding-right: 92pt;text-indent: 0pt;text-align: left;">CONTRATO
                            DE COMPRAVENTA: CARTA RESPONSIVA: IDENTIFICACION DEL VENDEDOR: INFORME REPUVE:</p>
                    </td>
                </tr>
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#BEBEBE">
                        <p class="s2"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            EMPLACAMIENTO</p>
                    </td>
                </tr>
                @foreach ($placas as $placas)
                    @if ($placas->estatus == 'VIGENTES')

                        <tr style="height:20pt">
                            <td
                                style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    PLACAS: {{ $placas->placas }}</p>
                            </td>
                            <td
                                style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    VIGENCIA: {{ $placas->vencimiento }}</p>
                            </td>
                        </tr>
                        <tr style="height:20pt">
                            <td
                                style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                            </td>
                            <td
                                style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    FECHA DE ALTA: {{ $placas->alta }}</p>
                            </td>
                        </tr>
                        <tr style="height:20pt">
                            <td
                                style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                            </td>
                            <td
                                style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    FECHA DE BAJA: {{ $placas->baja }}</p>
                            </td>
                        </tr>
                        <tr style="height:20pt">
                            <td
                                style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                            </td>
                            <td
                                style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    FECHA CAMBIO DE PROPIETARIO:
                                </p>
                            </td>
                        </tr>
                    @else

                    @endif
                @endforeach
                @foreach ($tarjetacs as $tarjetacs)
                    @if ($tarjetacs->estatus == 'VIGENTE')
                        <tr style="height:20pt">
                            <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                colspan="2">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    No. TARJETA DE CIRCULACION: {{ $tarjetacs->folio }}
                                </p>
                            </td>
                        </tr>
                        <tr style="height:20pt">
                            <td
                                style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    FECHA DE INICIO: {{ $tarjetacs->inicio }}</p>
                            </td>
                            <td
                                style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    FECHA DE VENCIMIENTO: {{ $tarjetacs->vencimiento }}</p>
                            </td>
                        </tr>

                    @endif
                @endforeach
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#BEBEBE">
                        <p class="s2"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            PERMISOS</p>
                    </td>
                </tr>
                @foreach ($permisos as $permisos)
                    <tr style="height:20pt">

                        <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                            colspan="2">

                            <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">No.
                                PERMISO FEDERAL DE CARGA: {{ $permisos->no_permiso }}
                            </p>

                        </td>

                    </tr>
                @endforeach
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#BEBEBE">
                        <p class="s2"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            SEGURO VEHICULAR</p>
                    </td>
                </tr>
                @foreach ($polizas as $polizas)
                    @if ($polizas->estatus == 'VIGENTES')


                        <tr style="height:20pt">
                            <td
                                style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    ASEGURADORA: {{ $polizas->aseguradora }}</p>
                            </td>
                            <td
                                style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    No.
                                    POLIZA: {{ $polizas->poliza }}</p>
                            </td>
                        </tr>
                        <tr style="height:20pt">
                            <td
                                style="width:262pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    FECHA
                                    DE INICIO: {{ $polizas->inicio }}</p>
                            </td>
                            <td
                                style="width:299pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    FECHA
                                    DE VENCIMIENTO: {{ $polizas->vencimiento }}</p>
                            </td>
                        </tr>
                        <tr style="height:20pt">
                            <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                colspan="2">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    ENDOSO: {{ $polizas->endoso }}</p>
                            </td>
                        </tr>
                        <tr style="height:39pt">
                            <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                                colspan="2">
                                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                    CONCEPTO DEL ENDOSO: {{ $polizas->concepto_endoso }}</p>
                            </td>
                        </tr>
                    @endif
                @endforeach
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#BEBEBE">
                        <p class="s2"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            TENENCIAS</p>
                    </td>
                </tr>
                <tr style="height:39pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                            TENENCIAS: |
                            @foreach ($tenencias as $tenencias)
                                {{ $tenencias->año }} |
                            @endforeach

                        </p>
                    </td>
                </tr>
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#BEBEBE">
                        <p class="s2"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            VERIFICACIONES
                        </p>
                    </td>
                </tr>
                <tr style="height:39pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                            VERIFICACIÓN ESTATAL A: |
                            @foreach ($verificacion_as as $verificacion_as)
                                {{ $verificacion_as->verificacion }} |
                            @endforeach
                        </p>
                    </td>
                </tr>
                <tr style="height:39pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                            VERIFICACIÓN ESTATAL B: |
                            @foreach ($verificacion_bs as $verificacion_bs)
                                {{ $verificacion_bs->verificacion }} |
                            @endforeach
                        </p>
                    </td>

                </tr>
                <tr style="height:39pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                            VERIFICACION FEDERAL A: |
                            @foreach ($verificacion_fs as $verificacion_fs)
                                {{ $verificacion_fs->verificacion }} |
                            @endforeach
                        </p>
                    </td>
                </tr>
                <tr style="height:39pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                            VERIFICACION FEDERAL B: |
                            @foreach ($verificacion_fsa as $verificacion_fsa)
                                {{ $verificacion_fsa->verificacion }} |
                            @endforeach
                        </p>
                    </td>
                </tr>
                <tr style="height:39pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                            VERIFICACION FISICO
                            MECANICA: |
                            @foreach ($fisico_ms as $fisico_ms)
                                {{ $fisico_ms->verificacion }} |
                            @endforeach
                        </p>
                    </td>
                </tr>
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#BEBEBE">
                        <p class="s2"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            POLIZAS ANTERIORES</p>
                    </td>
                </tr>
                <tr style="height:39pt">

                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">

                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">POLIZAS:
                            |
                            @foreach ($polizas2 as $polizas2)
                                {{ $polizas2->inicio }} |
                            @endforeach
                        </p>

                    </td>

                </tr>
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#BEBEBE">
                        <p class="s2"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            PLACAS ANTERIORES</p>
                    </td>
                </tr>
                <tr style="height:39pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">PLACAS: |
                            @foreach ($placas2 as $placas2)
                                {{ $placas2->placas }} |
                            @endforeach
                        </p>
                    </td>
                </tr>
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#BEBEBE">
                        <p class="s2"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            ENDOSO ANTERIORES

                        </p>

                    </td>
                </tr>
                <tr style="height:39pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">ENDOSO
                            ANTERIORES: |
                            @foreach ($polizas3 as $polizas3)
                                {{ $polizas3->concepto_endoso }} |
                            @endforeach
                        </p>
                    </td>
                </tr>
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#BEBEBE">
                        <p class="s2"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            PROPIETARIOS ANTERIORES</p>
                    </td>
                </tr>
                <tr style="height:39pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                            PROPIETARIOS</p>
                    </td>
                </tr>
                <tr style="height:20pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2" bgcolor="#BEBEBE">
                        <p class="s2"
                            style="padding-left: 188pt;padding-right: 188pt;text-indent: 0pt;text-align: center;">
                            PERMISOS</p>
                    </td>
                </tr>
                <tr style="height:39pt">
                    <td style="width:561pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">PERMISOS
                            ANTERIORES: |
                            @foreach ($permisos2 as $permisos2)
                                {{ $permisos2->no_permiso }} |
                            @endforeach
                        </p>
                    </td>
                </tr>
            </table>


        </div>
        <div class="col-2" style="margin: 5px 1em 0 auto;"></div>
    </div>

</body>

</html>
