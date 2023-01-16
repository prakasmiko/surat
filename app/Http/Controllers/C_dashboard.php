<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_dashboard extends Controller
{
    public function Dashboard()
    {
        return view('dashboard');
    }
}
