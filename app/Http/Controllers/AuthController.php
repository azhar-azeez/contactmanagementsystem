<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use App\Http\Requests\RegisterUserRequest;

use App\Models\User;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    public function authenticate(Request $request) {
        $email = $request->email;
        $password = $request->password;

        $user = User::forEmail($email);
        if(!is_null($user)) {    
            
            if(Hash::check($password, $user->password)) {
                Auth::login($user);
                return redirect()->route('contacts');
            } else {
                session()->flash('danger', 'Incorrect password provided');
                return redirect()->back();
                
            }
        } else {
            session()->flash('danger', 'User not found for the email'. $email);
            return redirect()->back();
        }
    }

    public function createUser(RegisterUserRequest $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        session()->flash('success', 'You have been signed up. Login now to continue. ');
        return redirect()->route('login');
    }
}
