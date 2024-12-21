<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TevekenysegController extends Controller
{
    public function index(){
        return Tevekenyseg::all();
    }
}
