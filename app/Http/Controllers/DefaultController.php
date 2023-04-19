<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index(string $name)
    {
        return view('default', [
            'name' => $name
        ]);
    }
}
