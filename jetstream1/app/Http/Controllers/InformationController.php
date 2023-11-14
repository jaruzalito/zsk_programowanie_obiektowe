<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function show(){
        $data = [
            "imie"=>"JAN",
            "hobby"=>"Fortnite"
        ];
        return $data["imie"]." jest jebanym pedałem, ale go lubimy bo kocha ".$data["hobby"];
    }
    public function showview(string $name){
        return view('fortnajtowcy',['name'=>$name]);
    }
};
