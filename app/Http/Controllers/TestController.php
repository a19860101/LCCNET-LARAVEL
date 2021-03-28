<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function asdf(){
        // return 'Hello ASDF!!!!';
        return view('test');

    }
    function qwerty(){
        return 'hello qwerty';
    }

}


