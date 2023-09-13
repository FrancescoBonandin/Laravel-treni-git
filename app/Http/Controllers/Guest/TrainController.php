<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    
    public function index() {
        return view('homepage');
    }

    public function singleTrain($id) {
        
         return view('singolTrain');
    }
}
