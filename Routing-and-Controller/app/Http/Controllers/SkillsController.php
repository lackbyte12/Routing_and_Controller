<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = [
            'skills' => ['PHP', 'Laravel', 'JavaScript', 'Vue.js']
        ];

        return view('skills', $data);
    }
}
