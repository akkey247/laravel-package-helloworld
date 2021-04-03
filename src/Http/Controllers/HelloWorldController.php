<?php

namespace Akkey\HelloWorld\Http\Controllers;

use Illuminate\Routing\Controller;

class HelloWorldController extends Controller
{
    public function index()
    {
        // パッケージ内のviewを指定
        return view('akkey247::helloworld');
    }
}
