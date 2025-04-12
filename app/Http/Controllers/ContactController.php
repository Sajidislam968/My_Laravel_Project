<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $data = [
            'Name' => 'Sajid Islam',
            'Email' => 'Sajidislam968@gmail.com',
        ];
        return view('contact', $data);
    }
}
