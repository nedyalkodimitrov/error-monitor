<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $fillable = [
        "name",
        "description",
        "technology",
        "technology_version",
    ];

    public function versions(){
        return $this->hasMany(AppVersion::class, "app_id", "id");
    }
}
