<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;





class UserController extends Controller
{
    //
    function show(){
        if (Auth::check()) {
            return redirect('/admin/home'); // Redirect to dashboard if logged in
        }
        return view('admin.login.page.view_login');
    }


    public function checklogin(LoginValidation $request)
    {
          // Validate the login credentials
    // $credentials = $request->validate([
    //     'email' => 'required',
    //     'password' => 'required',
    // ]);

    $credentials=$request->only('email', 'password');
    // Check if the provided credentials match the expected username and password
    $user = User::where('email', $credentials['email'])->first();

    if (!$user || !Hash::check($credentials['password'], $user->password)) {
        return redirect()->route('login.view')->with('error' , 'Invalid credentials');

        // ->withInput($request->only('email')); // Show error message on failure
    }
    // Log in the user
    Auth::login($user);

    return redirect()->route('admin.view')->with('success', 'You are now logged in');
    }




    public function logout()
{
    Auth::logout(); // Log out the authenticated user

    return redirect()->route('login.view');;
}
}
