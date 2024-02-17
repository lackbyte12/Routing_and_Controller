<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data = [
            'hobbies' => ['Reading', 'Gardening', 'Cooking', 'Traveling']
        ];

        return view('hobbies', $data);
    }
}
