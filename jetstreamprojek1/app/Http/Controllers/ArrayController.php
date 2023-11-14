<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function ShowArray(){
        $data=[
            'firstName'=>'Jan',
            'lastName'=>'Sap',
            'city'=>'Poznan',
            'hobby'=>['siatka','zuzel','nozna'],
        ];
        return view('array',['user'=>$data]);
    }
}
