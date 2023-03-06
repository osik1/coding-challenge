<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;



class AuthController extends Controller
{
    /**
     * Register users
     */
    public function register(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required|max:55|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'c_password' => 'required|same:password', 
        ]);
       
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        // log user in
        Auth::login($user);
        return redirect("dashboard")->withSuccess('You are welcome, '. $user->name);
    }

     /**
     * Google Redirect
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }


    /**
     * Twitter Login redirect
     */
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }


    //Facebook Login
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->stateless()->redirect();
    }


    /**
     * Handle Call back for google signup
     */
    public function handleGoogleCallback()
    {

        try  {
            $user = Socialite::driver('google')->stateless()->user();

            $find_user = User::where('social_id', $user->id)->where('social_type', 'google')->first();

            if ($find_user) {
                Auth::login($find_user);
                return redirect('/dashboard');
            }else {
                $new_user = User::updateOrcreate([ 'social_id' => $user->id,], [
                    'name' => $user->name,
                    'email' => $user->email,
                    'avatar' => $user->avatar,
                    'social_type' => 'google',
                ]);
                // login user
                Auth::login($new_user);
                return redirect('/dashboard');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }      
    } 


    /**
     * Handle all social callbacks
     */
    public function handleTwitterCallback()
    {
        try {
            $user = Socialite::driver('twitter')->user();

            $find_user = User::where('social_id', $user->id)->where('social_type', 'twitter')->first();
            if($find_user){
                Auth::login($find_user);
                return redirect('/dashboard');
            }else{
                $new_user = User::updateOrcreate([ 'social_id' => $user->id,], [
                    'name' => $user->name,
                    'email' => $user->email,
                    'avatar' => $user->avatar,
                    'social_type' => 'twitter',
                ]);

                Auth::login($new_user);
                return redirect('/dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }



       /**
     * Handle all social callbacks
     */
    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();

            $find_user = User::where('social_id', $user->id)->where('social_type', 'facebook')->first();
            if($find_user){
                Auth::login($find_user);
                return redirect('/dashboard');
            }else{
                $new_user = User::updateOrcreate([ 'social_id' => $user->id,], [
                    'name' => $user->name,
                    'email' => $user->email,
                    'avatar' => $user->avatar,
                    'social_type' => 'twitter',
                ]);

                Auth::login($new_user);
                return redirect('/dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }


       /**
     * Login User
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
     
        $credentials = $request->only('email', 'password');
        if ($credentials){
            $user = User::where('email', $request->email)->first();
        }
        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard')
                 ->withSuccess('You are welcome, '. $user->name);
        } 
        return redirect("login")->withSuccess('Opps! You have entered invalid credentials');
    }



     /**
     * Logout User
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }



    /**
     * Forgot password
     */
    public function forgot_password(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );
     
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
        
        return back()->with('message', 'We have e-mailed your password reset link!');

    }


    /**
     * Reseting Password
     */
    public function reset_password(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
     
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
     
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
        
        return redirect('login')->with('message', 'Your password has been changed!');

    }


    // Dashboard view function
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
