<?php

namespace App\Livewire\Panels\Admin\Pages\Apps\Versions;

use App\Models\AppVersion;
use App\Models\Error;
use Livewire\Component;

class VersionEdit extends Component
{
    public AppVersion $appVersion;
    public $appVersionName;

    public function mount()
    {
        $this->appVersionName = $this->appVersion->version;
    }
    public function render()
    {
        return view('livewire.panels.admin.pages.apps.versions.version-edit');
    }

    public function updateApp()
    {
        $this->validate([
            'appVersionName' => 'required',
        ]);

        $this->appVersion->update([
            'version' => $this->appVersionName,
        ]);

        $this->dispatch('updatedVersion');
    }
}
