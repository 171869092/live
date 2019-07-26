<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * index
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return View::make('user.index');
    }

    /**
     * safer
     * @return \Illuminate\Contracts\View\View
     */
    public function userSafety()
    {
        return View::make('user.security');
    }

    /**
     * channge email
     * @return \Illuminate\Contracts\View\View
     */
    public function channgeEmail()
    {
        return View::make('user.channgeEmail');
    }

    /**
     * channge phone
     * @return \Illuminate\Contracts\View\View
     */
    public function channgePhone()
    {
        return View::make('user.channgePhone');
    }

    /**
     * channge password
     * @return \Illuminate\Contracts\View\View
     */
    public function channgePwd()
    {
        return View::make('user.channgePwd');
    }

    /**
     * add pay password
     * @return \Illuminate\Contracts\View\View
     */
    public function addPayPwd()
    {
        return View::make('user.addPayPwd');
    }

    /**
     * safetyQuestion
     * @return \Illuminate\Contracts\View\View
     */
    public function safetyQuestion()
    {
        return View::make('user.safetyQuestion');
    }

    /**
     * set page
     * @return \Illuminate\Contracts\View\View
     */
    public function setPage()
    {
        return View::make('user.setPage');
    }

    /**
     * subscribe
     * @return \Illuminate\Contracts\View\View
     */
    public function subscribe()
    {
        return View::make('user.subscribe');
    }
}
