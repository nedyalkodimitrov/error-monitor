<?php

namespace App\Livewire\Panels\Admin\Pages\Apps\Versions;

use Livewire\Component;

class Version extends Component
{
    public $version;
    public $listeners = ['updatedVersion' => 'refreshVersion'];
    public function render()
    {
        return view('livewire.panels.admin.pages.apps.versions.version');
    }

    public function refreshVersion()
    {
        $this->version = $this->version->refresh();
    }
}
