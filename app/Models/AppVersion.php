<?php

namespace App\Models;

use App\Service\TokenGenerator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class AppVersion extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $token = TokenGenerator::generateToken();
            $model->secret_key = Crypt::encryptString($token);
        });
    }
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
