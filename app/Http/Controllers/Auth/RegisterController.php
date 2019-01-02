<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/dashboard';

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
            'student_no'=> 'required|unique:users',
            'name' => 'required|string|max:255',
            'CID_No'=> 'required|max:8',
            'DOB'=> 'required',
            'Department'=> 'required',
            'Programme'=> 'required',
            'email' => 'required|string|email|max:255|unique:users',
            //'Joining_Year'=> 'required',
            'graduation_Year'=> 'required',
            'password' => 'required|string|min:6|confirmed',
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
            'student_no'=> $data['student_no'],
            'name' => $data['name'],
            'CID_No' => $data['CID_No'],
            'DOB' => $data['DOB'],
            'Department' => $data['Department'],
            'Programme' => $data['Programme'],
            'email' => $data['email'],
            'Joining_Year' => $data['Joining_year'],
            'graduation_Year' => $data['graduation_Year'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
