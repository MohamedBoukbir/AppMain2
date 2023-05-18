<?php

namespace App\Http\Controllers\staff;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index()
    {
        $users = User::whereRoleIs('candidat')->orderBy('id','desc')->paginate("");
        return view('staff.roles-assignment.index', compact('users'));
    }
}
