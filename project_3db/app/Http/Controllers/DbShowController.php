<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DbShowController extends Controller
{
    public function ShowTableUsers(){
        return DB::table('users')->insert([
            'name'=>'Bartosz',
            'email'=> 'Furry.kicia@o2.pl',
            'password'=>Hash::make('123')
        ]);
    }
}
