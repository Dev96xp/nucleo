<?php

namespace App\Livewire\Admin\Agenda;

use Livewire\Component;
use App\Models\Event;
use Livewire\Attributes\On;
use Carbon\Carbon;

class CreateDate extends Component
{
    public $open_modal = false;
    public $date, $time, $hours = 0, $minutes = 0, $appoitment, $description;
    public $prueba = 'red';



    // MASTER CLASS
    // SUPER IMPORTATNTE ESTAS REGLAS DE VALIDACION,
    // PARA QUE LOS VALORES APARESCAN EN EL FORMULARIO
    // ESTO ME PERMITIRA USAR LAS PROPIEDADES DEL OBJETO EN EL FORMULARIO
    protected $rules = [
        'date' => 'required',
        //'time' => 'required',
        'hours' => 'required|numeric|max:24',
        'minutes' => 'required|numeric|max:45',
        'appoitment' => 'required',

    ];


    public function render()
    {
        return view('livewire.admin.agenda.create-date');
    }


    #[On('dato-enviado')] //ESCUCHADOR DE EVENTO
    public function updateData($open_modal, $date)
    {
        $this->open_modal = $open_modal;  // MUESTAR EL MODAL
        $this->date = $date;              // OBTIENE LA FECHA DEL CALENDARIO
    }



    public function createAppoitment($date)
    {

        // Validar los datos
        $this->validate();

        $hours = str($this->hours);
        $minutes = str($this->minutes);

        // fecha y tiempo de la cita(evento - appoitment)
        $datetime_xp = $date.' '.$hours.':'.$minutes.':'.'00';

        // Crear el nuevo evento, cita wherever
        $event = Event::create([
            'title' => $this->appoitment,
            'start' => $datetime_xp,        // fecha y tiempo de la cita(evento - appoitment)
            'end' => $date,
            'description' => $this->description,
        ]);

        // Actualizar calendario
        // dispatching -  the act of sending off something
        $this->dispatch('renderCalendar', $event->id);         // Va hacia la vista de livewire

        $this->open_modal = false;                             // Cierra modal

    }
}
