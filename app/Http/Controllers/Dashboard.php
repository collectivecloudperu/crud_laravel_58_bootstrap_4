<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    // Vista Principal 
    public function index()
    {    	
        return view('admin.dashboard.index'); 
    }
}
