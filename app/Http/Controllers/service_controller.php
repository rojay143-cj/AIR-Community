<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class service_controller extends Controller
{
    public function getService(){
        return view('pages.service');
    }
}
