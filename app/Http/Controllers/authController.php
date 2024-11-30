<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function login() {
        return view('login');
    }

    public function logout() {
        Auth::logout();
        return to_route('login');
        
    }

    public function register(){
        return view('register');
    }
        
    public function inscription(LoginRequest $request){
        unset($request['_token']);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        
        
        $donnes = array_map('htmlspecialchars', $user->getAttributes());
        // dd($donnes);
        User::insert($donnes);
        return to_route('login');
    }


    public function doLogin(LoginRequest $request){
        $credentials = $request->validated();
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        return to_route('login')->withErrors([
            'email' => 'Vos identifiants sont incorrects'
        ])->onlyInput('email');
        
    }
}
