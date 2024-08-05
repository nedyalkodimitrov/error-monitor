<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function showTechnologies()
    {
        return view('panels.admin.pages.technologies.technologies');
    }

    public function showTechnology()
    {
        return view('admin.technology.index');
    }

    public function showTechnologyForm()
    {
        return view('admin.technology.index');
    }

    public function createTechnology()
    {
        return view('admin.technology.create');
    }


    public function editTechnology($id)
    {
        return view('admin.technology.edit');
    }

    public function deleteTechnology($id)
    {
        return view('admin.technology.index');
    }


    public function showTechnologyVersionForm($id)
    {
        return view('admin.technology.version.create');
    }
    public function createTechnologyVersion($id)
    {
        return view('admin.technology.version.create');
    }

    public function editTechnologyVersion($id)
    {
        return view('admin.technology.version.edit');
    }

    public function deleteTechnologyVersion($id)
    {
        return view('admin.technology.index');
    }
}
