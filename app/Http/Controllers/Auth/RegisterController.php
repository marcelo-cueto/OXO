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
            'name' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nacimiento'=>['required','date'],
            'phone'=>['required','integer','max:999999999999999'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'is_admin'=>['required','integer','max:1'],
            'address'=>['required','string','max:255'],
            'state'=>['required','string','max:50'],
            'codigo'=>['required','integer','max:10000',],
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
            'name' => $data['name'],
            'apellido' =>$data['apellido'],
            'email' => $data['email'],
            'bornDate'=>$data['nacimiento'],
            'telefono'=>$data['phone'],
            'password' => Hash::make($data['password']),
            'is_admin'=>$data['is_admin'],
            'address'=>$data['address'],
            'state'=>$data['state'],
            'postalcode'=>$data['codigo'],
        ]);
    }
}
