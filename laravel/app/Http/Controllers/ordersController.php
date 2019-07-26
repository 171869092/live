<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller;

class ordersController extends Controller
{
    /**
     * order list
     * @return \Illuminate\Contracts\View\View
     */
    public function index(){
        return View::make('orders.list');
    }

    /**
     *Exception order
     * @return \Illuminate\Contracts\View\View
     */
    public function abnormal(){
        return View::make('orders.abnormal');
    }

    /**
     *timeout order
     * @return \Illuminate\Contracts\View\View
     */
    public function timeout(){
        return View::make('orders.timeout');
    }

    /**
     *bounces order
     * @return \Illuminate\Contracts\View\View
     */
    public function bounces(){
        return View::make('orders.bounces');
    }

    /**
     *import order
     * @return \Illuminate\Contracts\View\View
     */
    public function import(){
        return View::make('orders.import');
    }

}
