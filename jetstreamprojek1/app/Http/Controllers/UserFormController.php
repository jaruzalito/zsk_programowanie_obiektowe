<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function ShowUser(Request $req){

        // return $req->input();
        // return $req->input('firstName');
        // return $req->all();
        // return $req->method();
        // return $req->url();
        // return $req->path();

        $data = [
            'firstName'=>  $req->input('firstName'),
            'lastName'=> $req->input('lastName'),
        ];

        return view('user', $data);
    }
}
