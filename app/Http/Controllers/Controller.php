<?php

namespace App\Http\Controllers;

use App\Models\Error;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function registerError(\Illuminate\Http\Client\Request $request)
    {
//        Log::log($request->message);

        return 1;
        try {
            $error = new Error();
            $error->name = "q1";
            $error->desciption = "11";
            $error->solution = "11";
            $error->app_version_id = 1;
            $error->priority_id = 1;
            $error->save();
        }catch (\Throwable $throwable){
            return $throwable->getMessage();
        }

        return response()->json([
            'message' => 'Error received'
        ]);
    }
}
