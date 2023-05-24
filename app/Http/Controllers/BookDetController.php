<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookDetController extends Controller
{
    public function showBookDet(){
        return view("bookDet");
    }
}
