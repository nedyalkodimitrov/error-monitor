<?php

namespace App\Repositories;

use App\Models\AppVersion;

class AppVersionRepository
{
    public static function checkAppVersionExistance($appId, $appVersion)
    {
        return AppVersion::where('app_id', $appId)->where('version', $appVersion)->exists();
    }
}
