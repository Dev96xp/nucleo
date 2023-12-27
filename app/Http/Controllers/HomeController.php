<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    public function __invoke(){
        // $users = User::all();
        // return $users;
        // return view('welcome');

        $option = 2;

        switch ($option) {
            case '1':
                return view('welcome');
                break;

            case '2':
                return view('main.welcome-04');
                break;

            case '3':
                return view('main.welcome-01');
                break;

            default:
                return view('welcome');
                break;
        }
        //return view('main.welcome-04');
        //return view('welcome');
    }
}
