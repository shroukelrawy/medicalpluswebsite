<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPage extends Controller
{
    public function home(){
        $title="Mediplus Website";
        return view('home',compact('title'));
    }
    public function contact(){
        $title="Contact Us";
        return view('contact',compact('title'));
    }
    public function services(){
        $title="Services";
        return view('services',compact('title'));
    }
    public function blog(){
        $title="Blog Single";
        return view('blog',compact('title'));
    }
    public function doctors(){
        $title="Doctors";
        return view('doctors',compact('title'));
    }
    public function error404(){
        $title="Error 404";
        return view('error404',compact('title'));
    }
}
