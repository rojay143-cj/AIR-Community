<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class community_controller extends Controller
{
    public function getCommunity(){
        return view('pages.community');
    }
}