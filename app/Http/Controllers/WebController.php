<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{


    public function portfolio_creator(){
        return view('web.portfolio_creator');
    }
}
