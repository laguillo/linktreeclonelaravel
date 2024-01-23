<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateController extends Controller
{
    //
    public function index(){
        return view('bio');
    }
    public function socialmedia(){
        return view('socialmedia');
    }
    public function seo(){
        return view('seo');
    }
}
