<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WritersController extends Controller
{
    public function writer(){
        $writerList = Writer::all();
        return view('pages.writers')->with('writers', $writerList);
    }
}
