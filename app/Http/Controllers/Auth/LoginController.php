<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use DB;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        // TODO: validar
        $user = DB::table('users')
            ->where('email', $request->email)
            ->first();

        if ($user === null) {
            // TODO: mensaje de usuario no encontrado
        } else {
            $credentials = $request->only('email', 'password');

            switch ($user->admin) {
                case true:
                    if (Auth::guard('admin')->attempt($credentials)) {
                        return redirect('/admin');
                    }

                    break;

                case false:
                    if (Auth::guard('user')->attempt($credentials)) {
                        return redirect('/vecino');
                    }

                    break;
            }
        }

    }
}
