<?php

namespace App\Http\Controllers;

use App\Models\seks;
use Illuminate\Http\Request;

class SeksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("messi.showall",['records'=>seks::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("messi.contactForm");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:3',
            'email'=>'required|email',
            'emailConf'=>'same:email',
        ],
        [
            'name.max'=>":attribute musi miec :max",
            'emailConf.same'=>':attribute mus byc taki sam jak :other',
        ]);
        $newRecord = new seks();
        $newRecord->name=$request->input('name');
        $newRecord->email=$request->input('email');
        $newRecord->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(seks $seks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(seks $seks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, seks $seks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(seks $seks)
    {
        //
    }
}
