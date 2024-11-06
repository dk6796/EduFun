<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WritersController extends Controller
{
    public function writer(){
         return view('pages.writers');
    }
}
