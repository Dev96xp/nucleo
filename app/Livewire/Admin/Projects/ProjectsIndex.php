<?php

namespace App\Livewire\Admin\Projects;

use Livewire\Component;
use App\Models\project;
use Livewire\WithPagination;

class ProjectsIndex extends Component
{

    // Se agrego estas lineas para usar la paginacion en el formulario
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;


    public function render()
    {
        $projects = Project::where('name', 'LIKE', '%' . $this->search . '%')
            ->orWhere('phone', 'LIKE', '%' . $this->search . '%')
            ->paginate(8);

        return view('livewire.admin.projects.projects-index', compact('projects'));
    }

    public function limpiar_page()
    {
        $this->resetPage();
    }


    public function show_sections(Project $project)
    {
        $this->dispatch('index-projected', project: $project);
    }
}
