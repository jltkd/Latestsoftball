<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'coach_team_name'  => 'required|string|max:255',
            'coach_first_name' => 'required|string|max:255',
            'coach_last_name'  => 'required|string|max:255',
            'coach_username'   => 'required|string|max:255|unique:users',
            'coach_email'      => 'required|string|email|max:255|unique:users',
            'password'         => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'coach_team_name'  => $data['coach_team_name'],
            'coach_first_name' => $data['coach_first_name'],
            'coach_last_name'  => $data['coach_last_name'],
            'coach_username'   => $data['coach_username'],
            'coach_email'      => $data['coach_email'],
            'coach_phone'      => $data['coach_phone'],
            'password'         => Hash::make($data['password']),
        ]);
    }
}
