<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignupEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [

			'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'phone' => ['required', 'numeric'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    {
        $this->validator($request->all())->validate();

		$user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->date_of_birth = $request->date_of_birth;
        $user->phone = $request->phone;
        $user->is_superadmin = 0;
        $user->password = Hash::make($request->password);
        $user->verification_code = sha1(time());
        $user->save();

        if($user){
			Mail::to($request->email)->send(new SignupEmail($user));
            return redirect()->back()->with(session()->flash('alert-success', 'Your account has been created. Please check email for verification link.'));
        }

        return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong!'));
    }

	public function verifyUser(Request $request)
	{
        $verification_code = $request->code;
        $user = User::where(['verification_code' => $verification_code])->first();

        if($user){
            $user->is_verified = 1;
            $user->save();
            return redirect()->route('front.login')->with(session()->flash('alert-success', 'Your account is verified. Please login!'));
        }

        return redirect()->route('front.login')->with(session()->flash('alert-danger', 'Invalid verification code!'));
    }
}
