<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'jethro',
            'description' => 'I am a web developer.'
        ];

        return view('about_me', $data);
    }
}
