<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collaboration_controller extends Controller
{
    public function getCollaboration(){
        return view('pages.collaboration');
    }
}
