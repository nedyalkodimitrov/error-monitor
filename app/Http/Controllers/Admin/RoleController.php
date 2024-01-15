<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function showRoles()
    {
        return view('admin.roles.index');
    }

    public function showRole()
    {
        return view('admin.roles.index');
    }

    public function showRoleForm()
    {
        return view('admin.roles.index');
    }

    public function createRole()
    {
        return view('admin.roles.create');
    }

    public function editRole($id)
    {
        return view('admin.roles.edit');
    }

    public function deleteRole($id)
    {
        return view('admin.roles.index');
    }
}
