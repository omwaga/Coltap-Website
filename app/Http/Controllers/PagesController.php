<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\BlogArticle;
use App\BlogCategory;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function admin()
    {
        return view('admin.login');
    }

    public function services()
    {
        $products = Product::all();

    	return view('services', compact('products'));
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
        $articles = BlogArticle::all();
        $categories = BlogCategory::all();

    	return view('blog.blog', compact('articles', 'categories'));
    }

    public function blog($title)
    {
        $blog = BlogArticle::where('title', $title)->first();
        $categories = BlogCategory::all();

    	return view('blog.blog-single', compact('blog','categories'));
    }

    public function category($name)
    {
        $category_id = BlogCategory::where('name', $name)->value('id');
        $categories = BlogCategory::all();
        $articles = BlogArticle::where('category_id', $category_id)->get();

    	return view('blog.blog-category', compact('categories', 'articles', 'name'));
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
