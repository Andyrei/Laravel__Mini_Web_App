<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerHandler extends Controller
{
    public function getAllInputs(Request $request){

        $file_name = $request -> file('cv')->getClientOriginalName();
        $request -> cv -> storeAs('public/curricula', $file_name);
        $validate = $request -> validate([

        ]);

        $careerData = $request -> all();
        return view('pages.printCareer', compact('careerData', 'file_name'));
    }
}
