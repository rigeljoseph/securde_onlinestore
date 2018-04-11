<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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

    public function logout(Request $request)
    {
        $description = $request->ip() . ' logged out ';

        activity()->log($description);

        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }


    protected function authenticated(Request $request, $user)
    {
        $description = $request->ip() . ' logged in ';

        activity()->log($description);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        $description = $request->ip() . ' failed to logged in ';

        activity()->log($description);
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
