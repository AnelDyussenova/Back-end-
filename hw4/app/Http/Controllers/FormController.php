<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function showw(){
        return view('show',['name'=> request('name'),'sname'=> request('surname')]);
    }
}
