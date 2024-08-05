<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Error;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function showError($id)
    {

        $error = Error::find($id);

        return view("panels.admin.pages.errors.error", ["error" => $error]);
    }

    public function createError(Request $request)
    {
        Error::create($request->only("priority_id", "app_version_id", "name", "description", "solution"));
        return response()->json(["message" => "Error created successfully", 201]);
    }
}
