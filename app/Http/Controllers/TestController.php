<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {
        return view('welcome');
        //return "El valor de los controladores";
    }
    //
}
