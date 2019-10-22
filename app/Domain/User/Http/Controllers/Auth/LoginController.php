<?php

namespace App\Domain\User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('user::auth.login');
    }

    public function store(Request $request)
    {
        if(Auth::attempt($request->only(['email', 'password']), false)){
            return view('user::dashboard.index');
        }

        return redirect()->back()->with('error', trans('user::auth.message_login_error'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.login.index');
    }
}
