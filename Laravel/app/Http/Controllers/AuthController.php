<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getRegister()
    {
        return view('pages.auth.register');
    }

    /**
     * @param Request $request
     */
    public function postRegister(Request $request)
    {

    }

    /**
     * @param string $email
     * @param string $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEmailVerification(string $email, string $token)
    {
        return view('pages.auth.email.verification');
    }

    /**
     * @param Request $request
     * @param string $email
     * @param string $token
     */
    public function postEmailVerification(Request $request, string $email, string $token)
    {

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getLogin()
    {
        return view('pages.auth.login');
    }

    /**
     * @param Request $request
     */
    public function postLogin(Request $request)
    {

    }

    /**
     *
     */
    public function getLogout()
    {

    }

    /**
     *
     */
    public function postLogout()
    {

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getForgotPassword()
    {
        return view('pages.auth.password.forgot');
    }

    /**
     * @param Request $request
     */
    public function postForgotPassword(Request $request)
    {

    }

    /**
     * @param string $email
     * @param string $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getResetPassword(string $email, string $token)
    {
        return view('pages.auth.password.reset');
    }

    /**
     * @param Request $request
     * @param string $email
     * @param string $token
     */
    public function postResetPassword(Request $request, string $email, string $token)
    {

    }
}
