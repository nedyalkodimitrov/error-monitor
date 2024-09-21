<?php

namespace App\Livewire\Panels\Admin\Pages\Apps;

use Livewire\Attributes\On;
use Livewire\Component;

class App extends Component
{
    public \App\Models\App $app;

    public function render()
    {
        return view('livewire.panels.admin.pages.apps.app');
    }


    #[On('editApp')]
    #[On('addAppVersion')]
    public function refreshApp()
    {
        $this->app->refresh();
    }
}
