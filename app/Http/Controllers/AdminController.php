<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;

class AdminController extends Controller
{
    public function index()
    {

    	return view('admin.index');
    }

    public function about()
    {
    	$abouts = About::all();
    	
    	return view('admin.about-us', compact('abouts'));
    }
}
