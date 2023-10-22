<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;
    public function getVersions(){
        return $this->hasMany(AppVersion::class, "app_id", "id");
    }
}
