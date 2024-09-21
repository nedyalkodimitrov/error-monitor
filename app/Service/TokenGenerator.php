<?php

namespace App\Service;

class TokenGenerator
{
    public static function generateToken()
    {
        return \Str::random(60);
    }
}
