<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Event;
use Livewire\Attributes\On;

class Schedule extends Component
{
    public $events;

    // Carga por primera vez los datos
    public function mount(){
        $this->events = Event::all();
    }

    public function render()
    {
       $events = Event::all();
        return view('livewire.schedule',compact('events'));

    }

    #[On('renderSchedule')] //ESCUCHADOR DE EVENTO
    public function updatedata($title){
       // dd($title);
       $this->events = Event::all();

       //$this->dispatch('renderCalendar', $this->events);                        // Va hacia la vista de livewire
    }
}
