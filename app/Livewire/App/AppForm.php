<?php

namespace App\Livewire\App;

use App\Models\Technology;
use Livewire\Component;

class AppForm extends Component
{
    public $technologies;
    public $technology_id;
    public $versions = [];

    public function render()
    {
        return view('livewire.app.app-form');
    }

    public function getVersionsForTechnology()
    {
       $this->versions = Technology::find($this->technology_id)->versions;
    }
}
