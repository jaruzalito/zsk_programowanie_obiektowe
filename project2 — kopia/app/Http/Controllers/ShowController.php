<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(){
        return 'kontroler ShowControler';
    }

    public function showData(){
        $data = [
            'firstName' => "JANUSZ",
            'lastName' => "Noawk",
            'city' => "Poznań"
        ];
        return view('data',$data);
    }
}
