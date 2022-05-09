<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    //
    public function index(){
        $listaTreni = Train::all();
        return view('home', compact('listaTreni'));
    }
}


