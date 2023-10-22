<?php

namespace App\Http\Controllers;

use App\Models\Error;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function registerError(Request $request)
    {
        Log::error($request->message);


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
