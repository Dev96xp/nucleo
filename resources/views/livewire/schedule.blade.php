<div>
    <div>
        {{-- Modal --}}
        {{-- @livewire('admin.agenda.editAgenda') --}}
        @livewire('admin.agenda.createDate')
    </div>

    {{-- Calendario --}}
    <div id="calendar"></div>


    {{-- JavaScript --}}
    <script>
        // Calendario
        document.addEventListener('livewire:init', function() {

            //var FEED_URL = "{{ url('/') }}" + "/event-feed"; //newT

            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',

                //initialView: 'multiMonthYear',
                locale: 'es',
                //height: 800,
                //weekends: false,
                //eventColor: '#D30E28',
                //eventDisplay: 'block',

                selectable: true,

                headerToolbar: { //Cabezera
                    left: 'dayGridMonth,timeGridWeek,listWeek',
                    center: 'title',
                    end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
                },


                // MUESTRA LOS EVENTOS DE LA DATA
                // events: myfeed.php?start=2023-12-01T00:00:00-05:00&end=2023-01-12T00:00:00-05:00
                events: @json($events), //ORIGINAL



                //EDITAR CITA - Ahorita no funciona
                /*
                editable: true,
                eventDrop: function(info) {
                    var date = calendar.getDate();
                    // *************   EDITAR UNA CITA   **************
                    Livewire.dispatch('mover-cita', {
                        openx_modal: true,
                        date_edit: date.toISOString(),
                        //event_id: info.events.id,
                    })
                },
                */


                // MUESTRA EL MODAL PARA CREAR NUEVA CITA
                dateClick: function(info) {
                    //alert('Hola !!!');

                    // IMPORTANTE: Este dispatch(emit), envia dato al componente,
                    // hace que se muestre el modal sobre el calendario, NO OLVIDES PONER LA ULTIMA COMA
                    // DESPUES DE ENVIAR EL ELTIMO PARAMETRO
                    Livewire.dispatch('dato-enviado', {
                        open_modal: true,
                        date: info.dateStr,
                    })
                },



            });


            // Is working with parametes
            Livewire.on('renderCalendar', eventId => {
                // alert('Id del evento: ' + eventId);
                calendar.render();
                $("#calendar").fullCalendar('render');
            });


            calendar.render();

        });
    </script>
</div>
