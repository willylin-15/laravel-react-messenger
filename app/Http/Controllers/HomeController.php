<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class HomeController extends Controller
{
    public function home()
    {
        return inertia('Home');
    }
}
