<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller;

class InventoryController extends Controller
{
    //
    public function index(){
        return View::make('inventories.index');
    }
}
