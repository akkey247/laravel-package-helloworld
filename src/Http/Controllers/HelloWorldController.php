<?php

namespace Akkey247\HelloWorld\Http\Controllers;

use Illuminate\Routing\Controller;

class HelloWorldController extends Controller
{
    /**
     * ビューを表示
     *
     * @return view
     */
    public function index()
    {
        return view('akkey247::helloworld');
    }
}
