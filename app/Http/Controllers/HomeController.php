<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class HomeController extends Controller
{
 
  
  public function __invoke()
  {
    
    

    return view('home');
  }
}
