<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
public function index(){
    
    $users = User::role('Admin')->get();

    return view('admin.index',compact('users'));
}
}
