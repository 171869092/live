<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller;

class MembersController extends Controller
{
    //
    public function index()
    {
        return View::make('members.member');
    }
}
