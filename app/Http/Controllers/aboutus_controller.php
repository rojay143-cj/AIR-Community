<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutus_controller extends Controller
{
    public function getAbout(){
        return view('pages.about us');
    }
}
