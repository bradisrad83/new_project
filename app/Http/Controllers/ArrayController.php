<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    //
    public function index() {
      $name_array = ["Brad", "Jason", "Jose", "Willis"];
      return view('array', compact('name_array'));
    }
}
