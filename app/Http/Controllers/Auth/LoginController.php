<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:user')->except('logout');
    }

    public function logout(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $this->guard('admin')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect(route('admin.login-view'));
        }
        // elseif (Auth::guard('sale')->check()) {
        //     $this->guard('sale')->logout();
        //     $request->session()->invalidate();
        //     $request->session()->regenerateToken();

        //     return redirect(route('sale.login-view'));
        // }
        // elseif (Auth::guard('content')->check()) {
        //     $this->guard('content')->logout();
        //     $request->session()->invalidate();
        //     $request->session()->regenerateToken();

        //     return redirect(route('content.login-view'));
        // }
        // elseif (Auth::guard('employee')->check()) {
        //     $this->guard('employee')->logout();
        //     $request->session()->invalidate();
        //     $request->session()->regenerateToken();

        //     return redirect(route('employee.login-view'));
        // }
        else {
            $this->guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');
        }
    }





    public function showAdminLoginForm()
    {
        // dd('hello');
        return view('auth.login', ['route' => route('admin.login-view'), 'title' => 'Admin']);
    }

    public function adminLogin(Request $request)
    {
        // echo "<pre>";print_r($request->toArray());die();
        $this->validate(
            $request,
            [
                'username'   => 'required|string|max:255|exists:admins,username',
                'password' => 'required|min:8',

            ],
            [
                'username.required' => 'Username is required',
                'username.exists' => 'Username not exist',
            ]
        );

        if (Auth::guard('admin')->attempt($request->only('username', 'password'), $request->get('remember'))) {
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withInput($request->only('username', 'remember'))->with('message','Password Invalid');
    }


}
