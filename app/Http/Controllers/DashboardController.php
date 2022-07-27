<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
	
		//Checking user's role to redirect him to right dashboard
				return view('dashboard');
	}
}
