<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    //
    /**
     * shipping authoriztion
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return View::make('authoriz.auth');
    }

    public function b2c(){
        return View::make('authoriz.b2c');
    }
}
