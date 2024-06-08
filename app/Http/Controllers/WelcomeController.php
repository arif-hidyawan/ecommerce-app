<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view ('welcome_message', ['message' => 'Welcome to E-commerce App']);
    }
}
