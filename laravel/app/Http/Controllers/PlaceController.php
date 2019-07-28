<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller;

class PlaceController extends Controller
{
    /**
     * index
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return View::make('place.products');
    }

    /**
     * template
     * @return \Illuminate\Contracts\View\View
     */
    public function freightTmp()
    {
        return View::make('place.freightTmp');
    }
}
