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
        return view('panels.admin.pages.technologies.technology');
    }

    public function showTechnologyForm()
    {
        return view('panels.admin.pages.technologies.technologyForm');
    }

    public function createTechnology()
    {
    }


    public function editTechnology($id)
    {
    }

    public function deleteTechnology($id)
    {
    }


    public function showTechnologyVersionForm($id)
    {
        return view('panels.admin.pages.technologies.versions.versionForm');
    }
    public function createTechnologyVersion($id)
    {
    }

    public function editTechnologyVersion($id)
    {
    }

    public function deleteTechnologyVersion($id)
    {
    }


}
