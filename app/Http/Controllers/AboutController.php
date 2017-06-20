<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function test(){
      $site_title = "About my laravel site";
      $first_name = "Brad";
      $last_name = "Goldsmith";
      $email = "wouldntyouliketoknow@gmail.com";
        return view('about' , compact('site_title', 'first_name', 'last_name', 'email'));
    }
}
