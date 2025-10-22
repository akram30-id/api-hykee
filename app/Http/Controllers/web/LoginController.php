<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {

        $title = 'Sign In';

        $data = [
            'title' => $title
        ];

        return view('auth.login', $data);
    }

    public function register()
    {
        $title = 'Sign Up';

        $data = [
            'title' => $title
        ];

        return view('auth.register', $data);
    }
}
