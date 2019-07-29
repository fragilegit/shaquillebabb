<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //route to index page
    public function index(){
        return view('pages.index');
    }

    public function portfolio(){
        return view('pages.index');
    }

    Public function site(){
        return view('sites.questions');
    }

    public function bigDay(){
        return view('pages.anniversary');
    }
}
