<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function showApps()
    {
        return view('admin.apps.index');
    }

    public function showApp()
    {
        return view('admin.apps.index');
    }

    public function showAppForm()
    {
        return view('admin.apps.index');
    }

    public function createApp()
    {
        return view('admin.apps.create');
    }

    public function editApp($id)
    {
        return view('admin.apps.edit');
    }

    public function deleteApp($id)
    {
        return view('admin.apps.index');
    }



    public function showAppVersionForm($id)
    {
        return view('admin.apps.version.create');
    }
    public function createAppVersion($id)
    {
        return view('admin.apps.version.create');
    }

    public function editAppVersion($id)
    {
        return view('admin.apps.version.edit');
    }

    public function deleteAppVersion($id)
    {
        return view('admin.apps.index');
    }




}
