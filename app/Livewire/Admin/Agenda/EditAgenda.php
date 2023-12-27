<?php

namespace App\Livewire\Admin\Agenda;

use App\Models\Event;
use Livewire\Attributes\On;
use Livewire\Component;
use Carbon\Carbon;

    // NO SE ESTA USANDO MAS ***************************************************


class EditAgenda extends Component
{
    public $openx_modal = false;
    public $date_edit = 0;
    public $event;
    public $event_id;


        // MASTER CLASS
    // SUPER IMPORTATNTE ESTAS REGLAS DE VALIDACION,
    // PARA QUE LOS VALORES APARESCAN EN EL FORMULARIO
    // ESTO ME PERMITIRA USAR LAS PROPIEDADES DEL OBJETO EN EL FORMULARIO
    protected $rules = [
        'event.title' => 'required|max:60',
        'event.hours' => 'required|numeric|max:24',
        'event.minutes' => 'required|numeric|max:45',
        'event.description' => 'required|max:100',
    ];


    #[On('mover-cita')] //ESCUCHADOR DE EVENTO
    public function changeDate($openx_modal, $date_edit)
    {

        //dd('hola');
        $this->openx_modal = $openx_modal;
        $this->date_edit = $date_edit;
        //$this->event_id = $event_id;
    }


    public function mount(){

        $event = Event::find(1);     // Checar
        $this->event = $event;
    }


    public function render()
    {
        $event = Event::find(1);     // Checar
        return view('livewire.admin.agenda.edit-agenda', compact('event'));
    }

    public function moverAppoitment()
    {
        $this->openx_modal = false;
    }

}
