<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Entities\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/';

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
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function register(Request $request)
    {
        try{
            $this->validator($request->all())->validate();
        }catch(\Exception $e){
            dd('Что то не то!');
        }

        $name = $request -> input('name');
        $email = $request -> input('email');
        $isAuth = $request ->has('remember') ? true : false;
        $iin = $request -> input('iin');
        $password = $request -> input('password');
        $objUser = $this -> create([
            'name' => $name,
            'email' => $email,
            'iin' => $iin,
            'password' => $password,
        ]);

        if(!($objUser instanceof User)){
            return back() -> with('error', 'Pizdes');
        }

        if($isAuth){

            $this->guard()->login($objUser);
        }

        return redirect(route('login')) -> with('success', 'Nixuevenko');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Entities\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'iin' => $data['iin'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
