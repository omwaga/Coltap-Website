<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivesController extends Controller
{
   public function allarchives()
   {
   	return view('admin.all-archives');
   }
}
