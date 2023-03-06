<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactHandler extends Controller
{
    public function getAllInputs(Request $request) {
        $contactData = $request-> all();

        return view('pages.printContact', compact('contactData'));
    }
}
