<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hello World!";

    function __construct(){ //MyController

    }
    public function index(){
        $data['myinput'] = $req->input('myinput');
       return view('myroute', $data);
    }
}
