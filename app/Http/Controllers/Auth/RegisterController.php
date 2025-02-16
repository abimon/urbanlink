<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'name' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'contact'=>['required','min:9','unique:users'],
            // 'profile'=>'required|max:2048'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //dd(request());
        if(request()->hasFile('profile')){
            $extension = request()->file('profile')->getClientOriginalExtension();
            $path = time() . '.' . $extension;
            request()->file('profile')->storeAs('public/profile', $path);
        }
        else{
            $path = 'default.jpg';
        }
        $code = str_replace('+', '', substr("+254", 0, 1)) . substr("+254", 1);
        $originalStr = $data['contact'];
        $prefix = substr($originalStr, 0, 1);
        $contact= str_replace('0', $code, $prefix) . substr($originalStr, 1);
        return User::create([
            'name' => $data['name'],
            'email'=>$data['email'],
            'contact'=>$contact,
            'path'=>$path,
            'password' => Hash::make($data['password']),
        ]);
    }
}
