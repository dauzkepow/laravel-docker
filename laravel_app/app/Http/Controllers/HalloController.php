<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalloController extends Controller
{
    // index
    public function index()
    {
        return "<h1>Hallo dari laravel docker</h1>";
    }
}
