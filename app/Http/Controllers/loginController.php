<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function loginpage(){
        return view ('loginpages');
    }

    public function check(Request $request){
        $request -> validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'email wajib diisi',
                'password.required' => 'password wajib diisi',
            ]
        );
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            $user = Auth::user();
            $role = $user->role;
            if ($role == 'admin'){
                return redirect('/pegawai');
            }elseif ($role == 'user'){
                return redirect('/dashboard');
            }
            else{
                echo "error";
            }
            return redirect('/dashboard');
        }else{
            return redirect('')
        ->withErrors('Email dan password tidak sesuai.')
        ->withInput();
        }
    }


}
