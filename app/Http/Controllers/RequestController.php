<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class RequestController extends Controller
{
    public function titleHome()
    {
        $data = array(
            'title' => 'Home page'
        );
        return view('layouts.base')->with($data);
    }
}
