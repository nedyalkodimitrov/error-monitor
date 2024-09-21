<?php

namespace App\Livewire\Panels\Admin\Pages\Apps;

use App\Models\AppVersion;
use App\Repositories\AppVersionRepository;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddVersionForm extends Component
{
    public \App\Models\App $app;

    #[Validate('required|string|max:2')]
    public $app_version;
    public function render()
    {
        return view('livewire.panels.admin.pages.apps.add-version-form');
    }

    public function addAppVersion()
    {
        if (AppVersionRepository::checkAppVersionExistance($this->app->id, $this->app_version)){
            return;
        }

        AppVersion::create([
            'app_id' => $this->app->id,
            'version' => $this->app_version,
        ]);

        $this->dispatch('addAppVersion');
    }
}
