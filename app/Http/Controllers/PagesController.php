<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function admin()
    {
        return view('admin.login');
    }

    public function services()
    {
    	return view('services');
    }

    public function pricing()
    {
    	return view('pricing');
    }

    public function userlogin()
    {
    	return view('login');
    }

    public function signup()
    {
    	return view('signup');
    }

    public function aboutus()
    {
    	return view('about');
    }

    public function fromblog()
    {
    	return view('blog.blog');
    }

    public function blog()
    {
    	return view('blog.blog-single');
    }

    public function category()
    {
    	return view('blog.blog-category');
    }

    public function blogarchive()
    {
    	return view('blog.blog-archive');
    }

    public function contactus()
    {
    	return view('contact');
    }

    public function download()
    {
    	return view('download');
    }

    public function reset_password()
    {
    	return view('reset-password');
    }

}
