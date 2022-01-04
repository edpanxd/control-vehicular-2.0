@extends('adminlte::page')

@section('title', 'Control vehicular')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <div class="row">

        <div class="col-mb-3 col-3">
            @if (new DateTime(" 30-03-$año")>= $actual)
                <div class="small-box bg-pink">
                    <div class="inner">
                        <h5>
                            1 de Enero A 30 de Marzo

                        </h5>

                        <p>Realizar pago tenencias.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            @endif
            @if (new DateTime(" 01-02-$año") <=$actual and new DateTime(" 30-03-$año")>=
                $actual)
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h5>
                            Placas con terminación:
                        </h5>
                        <h5>
                            5 o 6
                        </h5>
                        <p>Realizar Pago de verificación.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <a onclick="PrimerS1()" class="small-box-footer">mas información <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            @endif
            @if (new DateTime(" 01-02-$año") <=$actual and new DateTime(" 30-03-$año")>=
                $actual)
                <div class="small-box bg-pink">
                    <div class="inner">
                        <h5>
                            Placas con terminación:
                        </h5>
                        <h5>
                            7 o 8
                        </h5>
                        <p>Realizar Pago de verificación.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <a onclick="PrimerS2()" class="small-box-footer">mas información <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            @endif
            @if (new DateTime(" 01-03-$año") <=$actual and new DateTime(" 30-04-$año")>=
                $actual)
                <div class="small-box bg-red">
                    <div class="inner">
                        <h5>
                            Placas con terminación:
                        </h5>
                        <h5>
                            3 o 4
                        </h5>
                        <p>Realizar Pago de verificación.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <a onclick="PrimerS3()" class="small-box-footer">mas información <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            @endif
            @if (new DateTime(" 01-04-$año") <=$actual and new DateTime(" 30-05-$año")>=
                $actual)
                <div class="small-box bg-green">
                    <div class="inner">
                        <h5>
                            Placas con terminación:
                        </h5>
                        <h5>
                            1 o 2
                        </h5>
                        <p>Realizar Pago de verificación.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <a onclick="PrimerS4()" class="small-box-footer">mas información <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            @endif
            @if (new DateTime(" 01-05-$año") <=$actual and new DateTime(" 30-06-$año")>=
                $actual)
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h5>
                            Placas con terminación:
                        </h5>
                        <h5>
                            9 o 0
                        </h5>
                        <p>Realizar Pago de verificación.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <a onclick="PrimerS5()" class="small-box-footer">mas información <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            @endif
            @if (new DateTime(" 01-07-$año") <=$actual and new DateTime(" 30-08-$año")>=
                $actual)
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h5>
                            Placas con terminación:
                        </h5>
                        <h5>
                            5 o 6
                        </h5>
                        <p>Realizar Pago de verificación.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <a onclick="Segundo1()" class="small-box-footer">mas información <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            @endif
            @if (new DateTime(" 01-08-$año") <=$actual and new DateTime(" 30-09-$año")>=
                $actual)
                <div class="small-box bg-pink">
                    <div class="inner">
                        <h5>
                            Placas con terminación:
                        </h5>
                        <h5>
                            7 o 8
                        </h5>
                        <p>Realizar Pago de verificación.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <a onclick="Segundo2()" class="small-box-footer">mas información <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            @endif
            @if (new DateTime(" 01-09-$año") <=$actual and new DateTime(" 30-10-$año")>=
                $actual)
                <div class="small-box bg-red">
                    <div class="inner">
                        <h5>
                            Placas con terminación:
                        </h5>
                        <h5>
                            3 o 4
                        </h5>
                        <p>Realizar Pago de verificación.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <a onclick="Segundo3()" class="small-box-footer">mas información <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            @endif
            @if (new DateTime(" 01-10-$año") <=$actual and new DateTime(" 30-11-$año")>=
                $actual)
                <div class="small-box bg-green">
                    <div class="inner">
                        <h5>
                            Placas con terminación:
                        </h5>
                        <h5>
                            1 o 2
                        </h5>
                        <p>Realizar Pago de verificación.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <a onclick="Segundo4()" onclick="alerta1()" class="small-box-footer">mas información <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            @endif
            @if (new DateTime(" 01-11-$año") <=$actual and new DateTime(" 30-12-$año")>=
                $actual)
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h5>
                            Placas con terminación:
                        </h5>
                        <h5>
                            9 o 0
                        </h5>
                        <p>Realizar Pago de verificación.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>

                    <a onclick="Segundo5()" onclick="alerta()" class="small-box-footer">mas información <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            @endif
        </div>
        <div class="col-mb-9 col-9 mb-5">
            <div style="background-color: rgb(45, 51, 58);" id="calendar"></div>
        </div>
        <div class="col-mb-3 col-3 ">
            <div class="small-box bg-purple">
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
        <div class="col-12">
            <h4>Empresas</h4>
        </div>
        @foreach ($empresas as $empresas)
            <div class="col-mb-3 col-3">
                <div class="small-box" style="background-color: #9370DB">
                    <div class="inner">
                        <p>{{ $empresas->empresa }}</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <a href="/dashboardvehiculo/{{ $empresas->empresa }}" class="small-box-footer">Vehículos
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        @endforeach
        <div class="col-mb-12 col-12 mb-5" style="height: 500px; ">
            <h4>Grafica mensual</h4>
            <canvas id="myChart" class="mb-5" width="10%" height="10%"></canvas>
        </div>
        <div class="col-mb-12 col-12 mb-5" style="height: 300px;">
            <h4>Grafica anual</h4>
            <canvas id="bar-chart" width="800" height="450"></canvas>
        </div>
        <div class="col-12">
            <h4>Costos de años pasados</h4>
        </div>
        @foreach ($sumaA as $sumaA)
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box" style="background-color: #2E8B57">
                    <span class="info-box-icon "><i class="fas fa-wallet"></i></span>
                    <div class="info-box-content">
                        <h5 class="info-box-text"> </h5>
                        <h2 class="info-box-number">{{ $sumaA }}</h2>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        @endforeach
    </div>
    <footer>
        <div class="col-12 mb-4">
            <h4>Descargar excel</h4>
            <a href="ExcelTene" class="btn btn-info mb-2">TENENCIAS</a>
            <a href="ExcelPolizas" class="btn btn-info mb-2">PÓLIZAS</a>
            <a href="ExcelVE1" class="btn btn-info mb-2">VERIFICACIÓN E 1</a>
            <a href="ExcelVE2" class="btn btn-info mb-2">VERIFICACIÓN E 2</a>
            <a href="ExcelVF1" class="btn btn-info mb-2">VERIFICACIÓN F 1</a>
            <a href="ExcelVF2" class="btn btn-info mb-2">VERIFICACIÓN F 2</a>
            <a href="ExcelFisico" class="btn btn-info mb-2">FISICO M</a>
            <a href="ExcelPlacas" class="btn btn-info mb-2">PLACAS</a>
            <a href="ExcelTarjeta" class="btn btn-info mb-2">TARJETAS C</a>
        </div>
           
    </footer>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
    <link rel="stylesheet" href="https:////cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"
        integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
    <!--CALENDARIO -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            const fecha = new Date();
            var calendar = new FullCalendar.Calendar(calendarEl, {
                height: 550,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth',

                },

                eventClick: function(info) {
                    info.jsEvent.preventDefault();
                    swal({
                        title: info.event.title,
                        text: info.event.extendedProps.descripcion,
                        icon: "warning",
                    }).then(function() {
                        window.open(info.event.url);
                    });
                },

                initialDate: fecha,
                locale: 'es',
                editable: false,
                selectable: true,
                allDayDefault: false,

                events: "/eventos",
                eventColor: 'red',

            });

            calendar.render();
        });
    </script>
    <!--ALERTAS -->
    <script>
        function PrimerS1(params) {
            Command: toastr["warning"]("Recuarda realizar el pago de la verificacion", "Febrero, Marzo", )

            toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,

            }
        }

        function PrimerS2(params) {
            Command: toastr["warning"]("Recuarda realizar el pago de la verificacion", "Febrero, Marzo", )

            toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,

            }
        }

        function PrimerS3(params) {
            Command: toastr["warning"]("Recuarda realizar el pago de la verificacion", "Marzo, Abril", )

            toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,

            }
        }

        function PrimerS4(params) {
            Command: toastr["warning"]("Recuarda realizar el pago de la verificacion", "Abril, Mayo", )

            toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,

            }
        }

        function PrimerS5(params) {
            Command: toastr["warning"]("Recuarda realizar el pago de la verificacion", "Mayo, Junio", )

            toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,

            }
        }

        function Segundo1(params) {
            Command: toastr["warning"]("Recuarda realizar el pago de la verificacion", "Julio, Agosto", )

            toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,

            }
        }

        function Segundo2(params) {
            Command: toastr["warning"]("Recuarda realizar el pago de la verificacion", "Agosto, Septiembre", )

            toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,

            }
        }

        function Segundo3(params) {
            Command: toastr["warning"]("Recuarda realizar el pago de la verificacion", "Septiembre, Octubre", )

            toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,

            }
        }

        function Segundo4(params) {
            Command: toastr["warning"]("Recuarda realizar el pago de la verificacion", "Octubre, Noviembre", )

            toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,

            }
        }

        function Segundo5(params) {
            Command: toastr["warning"]("Recuarda realizar el pago de la verificacion", "Noviembre, Diciembre", )

            toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,

            }
        }
    </script>
    <!--GRAFICA LINE-->
    <script>
        const T = @json($TenenciaM);
        const P = @json($PolizaM);
        const VE = @json($VerificacionM);
        const VF = @json($VeridicacionFM);
        const VFM = @json($FisicoM);
        const PE = @json($PolizaM);
        const PL = @json($PlacasM);
        const TC = @json($TarjetasM);
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                    'Octubre', 'Noviembre', 'Diciembre'
                ],
                datasets: [{
                        label: 'Tenencias',
                        data: T,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',

                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',

                        ],

                        borderWidth: 3
                    },
                    {
                        label: 'Pólizas',
                        data: P,
                        backgroundColor: [

                            'rgba(54, 162, 235, 0.2)',

                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                        ],

                        borderWidth: 3
                    },
                    {
                        label: 'Verificación Estatal',
                        data: VE,
                        backgroundColor: [

                            'rgba(255, 206, 86, 0.2)',

                        ],
                        borderColor: [

                            'rgba(255, 206, 86, 1)',

                        ],

                        borderWidth: 3
                    },
                    {
                        label: 'Verificación Federal',
                        data: VF,
                        backgroundColor: [

                            'rgba(75, 192, 192, 0.2)',

                        ],
                        borderColor: [

                            'rgba(75, 192, 192, 1)',

                        ],

                        borderWidth: 3
                    },
                    {
                        label: 'Verificacion Físico Mecánico',
                        data: VFM,
                        backgroundColor: [

                            'rgba(153, 102, 255, 0.2)',

                        ],
                        borderColor: [

                            'rgba(153, 102, 255, 1)',

                        ],

                        borderWidth: 3
                    },
                    {
                        label: 'Permisos',
                        data: PE,
                        backgroundColor: [

                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [

                            'rgba(255, 159, 64, 1)'
                        ],

                        borderWidth: 3
                    },
                    {
                        label: 'Placas',
                        data: PL,
                        backgroundColor: [
                            'rgba(206, 248, 77, 0.2)',
                        ],
                        borderColor: [
                            'rgba(206, 248, 77, 1)',
                        ],

                        borderWidth: 3
                    },
                    {
                        label: 'Tarjetas de circulación',
                        data: TC,
                        backgroundColor: [
                            'rgba(89, 20, 77, 0.2)',
                        ],
                        borderColor: [
                            'rgba(89, 20, 77, 1)',
                        ],

                        borderWidth: 3
                    }
                ]

            },
            options: {

                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {


                        labels: {
                            color: '#FFFF',
                            font: {
                                size: 15,
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false,
                        },
                        ticks: {

                            color: '#ffff',
                        }
                    },
                    y: {

                        ticks: {

                            color: '#ffff',
                        },
                        grid: {
                            drawBorder: false,
                            color: '#ffff'
                        },
                    }
                }
            }
        });
    </script>
    <!--GRAFICA BAR-->
    <script>
        const G = @json($graficaaño);
        new Chart(document.getElementById("bar-chart"), {
            type: 'bar',
            data: {
                labels: ["Tenencias", "Pólizas", "Verificación E", "Verificacion F", "Verificacion FM", "Placas",
                    "Tarjetas"
                ],
                datasets: [{
                    label: "",
                    backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                    data: G
                }, ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                        labels: {
                            color: '#FFFF',
                            font: {
                                size: 15,
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false,
                        },
                        ticks: {

                            color: '#ffff',
                        }
                    },
                    y: {
                        ticks: {

                            color: '#ffff',
                        },
                        grid: {
                            drawBorder: false,
                            color: '#ffff'
                        },
                    }
                }
            }
        });
    </script>
@stop
