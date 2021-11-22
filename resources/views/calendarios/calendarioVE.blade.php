@extends('adminlte::page')

@section('title', 'Vehículos')

@section('content_header')

@stop

@section('content')
    <div style="background-color: rgb(45, 51, 58);" id="calendar"></div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">-->
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
            background-color: rgb(45, 51, 58);
        }

        #calendar {
            max-width: 1100px;
            margin: 40px auto;
        }

    </style>
@stop

@section('js')

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            const fecha = new Date();

            var calendar = new FullCalendar.Calendar(calendarEl, {

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
                defaultView: 'agendaWeek',
                allDayDefault: false,

                events: [{
                    title: 'Pago de tenencia',
                    start: '2021-01-01',
                    end: '2021-03-31',
                    display: 'background',
                   color: 'red'
                   
                    
                },
                ],
                
            });

            calendar.render();
        });
    </script>


@stop
