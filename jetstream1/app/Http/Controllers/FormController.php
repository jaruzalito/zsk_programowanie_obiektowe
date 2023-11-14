<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function FormularzGet(Request $req){
        $req->validate([
            "imie"=> "required|min:4|max:15",
            "nazwisko"=>"required|min:5|max:20",
            "email"=>"required|email"
        ],
        [
            "imie.required"=>"Pole imie jest wymagane",
            "nazwisko.required"=>"Pole nazwisko jest wymagane",
            "email.required"=> "Pole email jest wymagane",

            "email.email"=>"Pole musi być emailem",

            "imie.max"=>"Imie moze mieć maksymalnie :max znaków",
            "imie.min"=>":Attribute moze mieć minimalnie :min znaków",

            "nazwisko.max"=>"Imie moze mieć maksymalnie :max znaków",
            "nazwisko.min"=>":Attribute moze mieć minimalnie :min znaków",

        ]);

        return view("uzytkownik",$req);

        // $dane=[
        //     'imie'=>$req->input("imie"),
        //     'nazwisko'=>$req->input("nazwisko"),
        //     'email'=>$req->input("email"),
        // ];
        // return view('uzytkownik',$dane);
    }
}
