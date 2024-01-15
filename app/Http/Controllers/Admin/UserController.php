<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUsers()
    {
        return view('admin.users.index');
    }

    public function showUser()
    {
        return view('admin.users.index');
    }

    public function showUserForm()
    {
        return view('admin.users.index');
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function editUser($id)
    {
        return view('admin.users.edit');
    }

    public function deleteUser($id)
    {
        return view('admin.users.index');
    }


}
