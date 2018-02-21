<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAccount()
    {
        return view('pages.account.account');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEmail()
    {
        return view('pages.account.email.email');
    }

    /**
     * @param Request $request
     */
    public function postEmail(Request $request)
    {

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPassword()
    {
        return view('pages.account.password.password');
    }

    /**
     * @param Request $request
     */
    public function postPassword(Request $request)
    {

    }
}
