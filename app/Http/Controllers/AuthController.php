<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\authentication\AuthServiceFactory;
use Illuminate\Support\Facades\Auth;
use Exception;

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
        try {
            $login = $this->auth_service->login($request);
            $respose = $login->getBody()->getContents();
            //dd(json_decode($respose, true)['jwt']);

            if ($login) {
                $request->session()->forget('userToken');
                $request->session()->put('userToken', json_decode($respose, true)['jwt']);
                flash()->success('Login successfully!');
                return redirect()->route('dashboard');
            }
        } catch (Exception $e) {
            flash()->error('Failed to Login, Check your credentials, internet conection and try again!');
            return redirect()->route('login-form');
            echo 'Message: ' . $e->getMessage();
        }
    }



    public function logout(Request $request)
    {
        $request->session()->forget('userToken');
        return redirect()->route('login-form');
    }
}
