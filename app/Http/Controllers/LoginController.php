<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;

//    protected $redirectTo = '/index';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function username()
    {
        return 'post_id';
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('post_id', 'password', 'type');
//        return Auth::attempt(
//            [
//                'post_id' => $credentials['post_id'],
//                'password' => $credentials['password'],
//                'type' => $credentials['type']
//            ]
//        );
//        return $credentials;
        $user = User::where("post_id", $credentials['post_id'])
            ->where("password", $credentials['password'])
            ->where("type", $credentials['type'])->first();
        if ($user) {
            Auth::login($user);
            return redirect()->to('/index');
        } else
            return back()->withErrors(["a"]);
    }
}
