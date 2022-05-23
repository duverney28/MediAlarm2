<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

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
    protected $stateless = false;
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

    //google login

    public function redirectToGoogle()
    {

        return Socialite::driver('google')->redirect();
    }
    // google callback
    public function handleGoogleCallback()
    {
       $user = Socialite::driver('facebook')->user();
        $this->_registerOrLoginUser($user);
      
    }


    //facebook login

    public function redirectToFacebook()
    {

        return Socialite::driver('facebook')->redirect();
    }
    // facebook callback
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $this->_registerOrLoginUser($user);
       
    }

    protected function _registerOrLoginUser($data)
    {
        $userExist = User::where('external_id', $data->id)->where('external_auth', 'google')->first();
        if ($userExist) {
            Auth::login($userExist);
        } else {
            $userNew = User::create([
                'name' => $data->name,
                'email' => $data->email,
                'avatar' => $data->avatar,
                'external_id' => $data->id,
                'external_auth' => 'google',
            ]);

            Auth::login($userNew);
        }

        return redirect('/home');
    }
}
