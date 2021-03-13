<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Mockery\Exception;

class loginController extends Controller
{
    public function index(){
        return view('backend.partials.login');
    }
    public function submit(Request $request){
        try {
            $rules =[
                'email'=>['required'],
                'password'=>['required']
            ];
                $validate = Validator::make($request->all(),$rules);
                if ($validate->fails()){
                    return redirect()->back()->withErrors($validate)->withInput();
                }

                $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){
            return redirect()->route('admin');
        }
        else{
            return redirect()->back();
        }

        }catch (\Exception $exception){
            return redirect()->back()->withErrors($exception->getMessage());
        }

    }

}

