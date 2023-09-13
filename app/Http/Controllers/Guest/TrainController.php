<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    
    public function index() {
        $trains = Train::all();

        return view('homepage', compact('trains'));
    }

    public function singleTrain($id) {
        $singolTrain = Train::find($id);

         return view('singolTrain', compact('singolTrain'));
    }
}
