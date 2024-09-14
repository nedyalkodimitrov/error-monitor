<?php

namespace App\Livewire\Panels\Admin\Pages\Apps;

use App\Models\Technology;
use Livewire\Component;

class AppForm extends Component
{
    public $technology_id;

    public function render()
    {

        return view('livewire.panels.admin.pages.apps.app-form', [
            'technologies' => Technology::all(),
            'versions' => Technology::find($this->technology_id)?->versions ?? [],
        ]);
    }

    public function getVersionsForTechnology()
    {

    }
}
