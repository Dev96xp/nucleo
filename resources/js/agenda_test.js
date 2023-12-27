
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {

      initialView: 'dayGridMonth',
      locale:"es",  //Ideoma

      headerToolbar:{  //Cabezera
        left: 'dayGridMonth,timeGridWeek,listWeek',
        center: 'title',
        end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
      },

      //weekends: false,
      //eventColor: '#D30E28',
      //height: 650,
      //eventDisplay: 'block',
      //events: @json($events),  NO FUNCIONA ???

    //     dateClick: function(info) {
    //      alert('Clicked on: ' + info.dateStr);
    //      alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
    //      alert('Current view: ' + info.view.type);
    //      // change the day's background color just for fun
    //      info.dayEl.style.backgroundColor = 'red';
    //    }

    });
    calendar.render();
  });




//   multiMonthYear
