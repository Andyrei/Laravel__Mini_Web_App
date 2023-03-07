<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactHandler extends Controller
{
    public function getAllInputs(Request $request) {
        $contactData = $request-> all();
        $validate = $request -> validate([
            "name"=>"required",
            "mail"=>" email",
            "msg"=> "required"
        ]);
        return view('pages.printContact', compact('contactData'));
    }
}
