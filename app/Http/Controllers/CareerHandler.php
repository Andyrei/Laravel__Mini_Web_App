<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerHandler extends Controller
{
    public function getAllInputs(Request $request){
        $request -> file('cv') -> store('curricula');

        $careerData = $request -> all();

        return view('pages.printCareer', compact('careerData'));
    }
}
