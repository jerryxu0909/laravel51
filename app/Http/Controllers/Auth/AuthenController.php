<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Illuminate\Support\Facades\Input;

/**
* 通过用户名登录
*/
class AuthenController extends Controller
{
    
     public function getLogin()
    {
        if (view()->exists('auth.authenticate')) {
            return view('auth.authenticate');
        }

        return view('auth.loginen');
    }
    /**
    * 处理登录认证
    *
    * @return Response
    */
    public function authenticate()
    {
        $name = Input::get("name");
        $password = Input::get("password");
        if (Auth::attempt(['name' => $name, 'password' => $password, 'status'=>1])) {
            // 认证通过...
            return redirect()->intended('home');
        }   else {
            return redirect()->back()->withInput()->withErrors('用户名或密码错误！');
        }
    }

}
