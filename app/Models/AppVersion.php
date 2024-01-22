<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppVersion extends Model
{
    use HasFactory;

    public function getApp(){
        return $this->belongsTo(App::class, "app_id", "id");
    }

    public function getErrors(){
        return $this->hasMany(Error::class, "app_version_id", "id");
    }
}
