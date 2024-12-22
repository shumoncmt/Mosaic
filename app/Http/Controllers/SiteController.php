<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function home(){
        return view('home');
    }
    function about(){
        return view('about');
    }
    function contact(){ 
    return view('contact');
    }
    function blog(){
        return view('contact');
    }
    function blogsingle(){
        return view('blogsingle');
    }
    function project(){
        return view('project');
    }
    function team(){
        return view('team');
    }
    function service(){
        return view('service');
    }



}
