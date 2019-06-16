<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Dato;

class LoginController extends Controller
{
    /**
     *
     */
    public function showLoginForm(){
        $dato = Dato::get();
        return view('Auth.login', ['dato'=>$dato]);
    }

    public function login(Request $request){

        $this->validateLogin($request);


        if( Auth::attempt(['usuario' => $request->usuario, 'password' => $request->password, 'condicion'=>1])){
            return redirect()->route('main');

        }

        return back()
        ->withErrors(['usuario' => trans('auth.failed')])
        ->withInput(request(['usuario']));
    }

    protected function validateLogin(Request $request){

        $this->validate($request,[

                'usuario' => 'required|string',
                'password' => 'required|string'
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');

    }

}
