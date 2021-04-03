<?php

use Illuminate\Support\Facades\Route;
use Akkey247\HelloWorld\Http\Controllers\HelloWorldController;

Route::get('helloworld', [HelloWorldController::class, 'index']);