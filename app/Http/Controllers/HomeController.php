<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome(){
        $data = DB::table("books")->get();
        return view("Home", 
        [
            "dataBuku" => $data
        ]
    );
    }
}
