<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function showPermissions()
    {
        return view('admin.permissions.index');
    }

    public function showPermission()
    {
        return view('admin.permissions.index');
    }

    public function showPermissionForm()
    {
        return view('admin.permissions.index');
    }

    public function createPermission()
    {
        return view('admin.permissions.create');
    }

    public function editPermission($id)
    {
        return view('admin.permissions.edit');
    }

    public function deletePermission($id)
    {
        return view('admin.permissions.index');
    }
}
