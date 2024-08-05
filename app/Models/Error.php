<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    protected $fillable = ["priority_id", "app_version_id", "name", "description", "solution"];

    public function getPriority(){
        return $this->belongsTo(Priority::class, "priority_id");
    }


    public function getAppVersion(){
        return $this->belongsTo(AppVersion::class);
    }
}
