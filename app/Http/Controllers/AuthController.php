<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
      return view('auth.login', [
        'title' => 'sign in'
      ]);
    }
    
    public function register(){
      return view('auth.register', [
        'title' => 'sign up'
      ]);
    }

  public function loginPost(Request $request){
      $remember = $request->has('remember_me') ? true : false; 

      $credentials = $request->validate([
            'email' => 'email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials, $remember))
        {
            $request->session()->regenerate();
            return redirect('/')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'email or password is incorrect .',
        ])->onlyInput('email');
  }
  
  public function registerPost(Request $request){
      $fullname = $request->firstname . ' ' . $request->lastname;
      
      $validator = $request->validate([
          'name' => 'string|max:250',
          'username' => 'string|max:250',
          'email' => 'email|max:250|unique:users',
          'password' => 'min:8'
      ]);
  
      User::create([
          'name' => $fullname,
          'username' => $request->username,
          'email' => $request->email,
          'password' => Hash::make($request->password)
      ]);
  
      $credentials = $request->only('email', 'password', 'username');
        Auth::attempt($credentials);
        
        $request->session()->regenerate();
        
        return redirect('/')->withSuccess('You have successfully registered & logged in!');
     }

    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
