<?php

namespace App\Livewire\Panels\Admin\Pages\Apps;

use Livewire\Attributes\Validate;
use Livewire\Component;

class AppEdit extends Component
{
    public \App\Models\App $app;

    #[Validate('required|string|max:255')]
    public $name;
    #[Validate('required|string|max:255')]
    public $technology;
    #[Validate('required|string|max:255')]
    public $description;

    public function mount()
    {
        $this->name = $this->app->name;
        $this->technology = $this->app->technology;
        $this->description = $this->app->description;
    }

    public function render()
    {
        return view('livewire.panels.admin.pages.apps.app-edit');
    }

    public function editApp()
    {
        $this->validate();

        $this->app->update([
            'name' => $this->name,
            'technology' => $this->technology,
            'description' => $this->description,
        ]);

        $this->dispatch('editApp');
    }

}
