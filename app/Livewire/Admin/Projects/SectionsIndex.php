<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use App\Models\Section;
use Livewire\Component;
use Livewire\Attributes\On;

class SectionsIndex extends Component
{
    public $project_id = 1;


    public function render()
    {
        $project = Project::find($this->project_id);

        $subtotal = get_subtotal($project);

        //dd($subtotal);

        return view('livewire.admin.projects.sections-index', compact('project', 'subtotal'));
    }


    #[On('index-projected')]
    public function updateData(Project $project)
    {
        //dd($project);
        $this->project_id = $project->id;
    }

    public function show_items(Section $section)
    {
        $this->dispatch('index-sectioned', section: $section);
    }
}
