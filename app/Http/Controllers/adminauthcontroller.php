<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminuser;
use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class adminauthcontroller extends Controller
{
  
    
    public function register(Request $request)
    {
       
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:adminusers',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8' // Add this line for password confirmation
        ]);
    
        // Creating a new AdminUser instance
        $user = new adminuser();
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();
    
        return redirect()->route('admin.login')->with('success', 'Account created successfully please login to continue');
        }
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255|min:8',
        ]);
    
        // Assuming 'username' is the field in your database, change this if it's 'email' or something else
        $username = $validatedData['username'];
        $password = $validatedData['password'];
    
        // Perform the login query
        $user = adminuser::where('email', $username)->first();
    
        if ($user && Hash::check($password, $user->password)) {
            // Authentication successful, redirect with success message
            session(['email' => $username]);
            return redirect()->route('productcount');
        } else {
            // Authentication failed, redirect with error message
            return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
        }
    }
    
    
    public function forgetpassword(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
        ]);
    
        $email = $validatedData['email'];
    
        // Check if the email exists in the database
        $user = adminuser::where('email', $email)->first();
    
        if ($user){
             session(['otp' => rand(100000, 999999)]);
             session(['email' => 'yohancgd@gmail.com']);
          //  Mail::to($email)->send(new welcome(['otp' => $otp]));
           return  redirect()->back()->with('success5', session('otp'));
          
                 } else {
            // Email does not exist in the database
            return redirect()->back()->withErrors(['email' => 'Email not found please contact admin for help']);
        }
    }
    public function otpcnfm(Request $request){
        $validatedData = $request->validate([
            'otp' => 'required|numeric',
        ]);
        $otp = $validatedData['otp'];
    
        if ($otp == session('otp')) {
            // OTP is correct, redirect to password reset page
            return "success"; //redirect()->route('password.reset');
        } else{
            // OTP is incorrect, redirect with error message
            return redirect()->back()->withErrors(['otp' => 'Invalid OTP']);
        }
    }
    public function resetpassword(Request $request){
        $validatedData = $request->validate([
            'newpassword' => 'required|string|min:8|confirmed',
            'newpassword_confirmation' => 'required|string|min:8' // Add this line for password confirmation
            ]);
            adminuser::where('email', session('email'))->update(['password' => Hash::make($validatedData['newpassword'])]);
            return redirect() ->route("admin.login");
    }
    public function profile(){
       $adminuser= adminuser::where('email', 'yohanvishvajith@gmail.com')->first();
       return view('admin.profile', compact('adminuser'));
    }
    
}
