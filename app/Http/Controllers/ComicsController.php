<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function getComics(){
        $comics = Comic::all();
        

        return view('comics' , compact('comics'));
    }
}
