<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Section;
use Livewire\Component;
use Livewire\Attributes\On;

class ItemsIndex extends Component
{

    public $section_id = 1;

    public function render()
    {
        $section = Section::find($this->section_id);
        return view('livewire.admin.projects.items-index', compact('section'));
    }


     #[On('index-sectioned')]
     public function updateData(section $section)
     {
         $this->section_id = $section->id;
     }
}
