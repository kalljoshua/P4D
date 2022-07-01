<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\authentication\AuthServiceFactory;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    private $auth_service;

    public function __construct()
    {
        $this->auth_service = AuthServiceFactory::create();
    }

    public function login_form()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $login = $this->auth_service->login($request);
        $respose = $login->getBody()->getContents();
        //dd(json_decode($respose, true)['jwt']);

        if ($login) {
            $request->session()->forget('userToken');
            $request->session()->put('userToken', json_decode($respose, true)['jwt']);
            flash()->success('Login successfully!');
            return redirect()->route('dashboard');
        }

        flash()->error('Failed to Login, please try again!');
        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }


    public function logout(Request $request)
    {
        $request->session()->forget('userToken');
        return redirect()->route('login-form');
    }
}
