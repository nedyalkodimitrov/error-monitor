<?php

namespace App\Http\Controllers;

use App\Models\App;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $apps = App::all();
        return view('home')->with('apps', $apps);
    }
}
