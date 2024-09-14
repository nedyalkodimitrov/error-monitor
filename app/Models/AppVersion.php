<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppVersion extends Model
{
    protected $fillable = [
        "app_id",
        "version",
    ];
    
    public function app(){
        return $this->belongsTo(App::class, "app_id", "id");
    }

    public function errors(){
        return $this->hasMany(Error::class, "app_version_id", "id");
    }
}
