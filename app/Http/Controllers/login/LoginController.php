<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function auth(Request $request){
        
       if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
        dd('logou');
       }else{
           dd('nao logou');
       }
        
    }
}
