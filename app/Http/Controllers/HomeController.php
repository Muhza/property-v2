<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//models
use App\Contact;

class HomeController extends Controller
{

    public function index()
    {
        $contact = Contact::first();

        $data = [
            'contact' => $contact
        ];

        return view('welcome', $data);
    }
}
