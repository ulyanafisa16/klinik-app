<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    }


    // protected function authenticated(Request $request, $user)
    // {
    //     // Periksa peran pengguna dan arahkan sesuai dengan perannya
    //     if ($user->role === 'admin') {
    //         return redirect()->route('admin.dashboard');
    //     } elseif ($user->role === 'operator') {
    //         return redirect()->route('operator.dashboard');
    //     } elseif ($user->role === 'dokter') {
    //         return redirect()->route('dokter.dashboard');
    //     } else {
    //         return redirect()->route('registrasipasien'); // Halaman utama untuk pengguna selain admin, operator, dan dokter
    //     }
    // }
}
