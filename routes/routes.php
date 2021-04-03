<?php

use Illuminate\Support\Facades\Route;
use Akkey\HelloWorld\Http\Controllers\HelloWorldController;

Route::get('helloworld', [HelloWorldController::class, 'index']);