<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    //

    public function index(){
        $title = 'Welcome To Laravel 8 !';
        return view('index')->with('title',$title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Strategy', 'Launch Pad', 'Continous Improvments']
        );
        return view('pages.services')->with($data);
    }
}
