<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
//        return view('todo');
        return view('works.index');
    }

    public function mp3()
    {
        return view('todo');
    }

    public function flappy()
    {
        return view('todo');
    }

    public function maze()
    {
        return view('todo');
    }

    public function spell()
    {
        return view('todo');
    }

    public function website()
    {
        return view('todo');
    }
}
