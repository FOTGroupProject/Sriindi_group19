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
            'first_name' => 'required|string|max:255|alpha',
            'last_name' => 'required|string|max:255|alpha',
            'email' => 'required|string|email|unique:adminusers,email|max:255',
            'password' => 'required|string|min:10|max:255|confirmed',
            'password_confirmation' => 'required|string|min:10||max:255' // Add this line for password confirmation
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
            return redirect()->route('resetpassword.admin');
        }else{
            // OTP is incorrect, redirect with error message
            return redirect()->back()->withErrors(['otp' => 'Invalid OTP']);
        }
    }
    public function resetpassword(Request $request){
        $validatedData = $request->validate([
            'newpassword' => 'required|string|min:9|confirmed',
            'newpassword_confirmation' => 'required|string|min:9' 
            ]);
            adminuser::where('email', session('email'))->update(['password' => Hash::make($validatedData['newpassword'])]);
            
            return redirect() ->route("admin.login")>with('success10', 'Password reset Successfull.');;
    }
    public function updatePassword(Request $request)
    {
        $validatedData = $request->validate([
            'currentpassword' => 'required|string|min:9',
            'newpassword' => 'required|string|min:9|confirmed',
            'newpassword_confirmation' => 'required|string|min:9'
        ]);
    
        $currentPassword = $validatedData['currentpassword'];
        $newPassword = $validatedData['newpassword'];
        $newPasswordConfirmation = $validatedData['newpassword_confirmation'];
    
        $user = adminuser::where('email', session('email'))->first();
       // dd($currentPassword,$user->password);
        if ($user && Hash::check($currentPassword, $user->password)) {
            $user->update(['password' => Hash::make($newPassword)]);
            return redirect()->back()->with('success', 'Password updated successfully.');
        } else {
            return redirect()->back()->withErrors(['password_error' => 'Invalid current password']);
        }
       
    }
    
    public function updateUserSetting(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|min:5|regex:/^[a-zA-Z]+$/|max:20',
            //'email' => 'required|string|email|max:255|unique:adminusers',
            'first_name' => 'required|string|min:5|regex:/^[a-zA-Z]+$/|max:20',
            'last_name' => 'required|string|min:5|regex:/^[a-zA-Z]+$/|max:20',
        ]);
    
       
        $user = adminuser::where('email', session('email'))->first();
        $user->update([
            'username' => $validatedData['username'],
          
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
        ]);
        $adminuser= adminuser::where('email', session('email'))->first();
      
        return redirect()->back()->with('success', 'User settings updated successfully.')->with(compact('adminuser'));

    }
    public function updatecontactsetting(Request $request)
    {
        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'contact' => 'required|string|max:255'
        ]);
    
       
        $user = adminuser::where('email', session('email'))->first();
        $user->update([
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
            'contact' => $validatedData['contact']
        ]);
    
        return redirect()->back()->with('success', 'User settings updated successfully.');
    }
    
    public function updateadminimage(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:9048',
        ]);
    
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('/admin'), $imageName);
    
        $user = adminuser::where('email', session('email'))->first();
        $user->update([
            'image' => $imageName,
        ]);
    
        return redirect()->back()->with('success', 'Image updated successfully.');
    }
    public function deleteaccount(){
        $adminuser= adminuser::count();
        if($adminuser>1){
            adminuser::where('email', session('email'))->delete();
            return redirect()->route('admin.login')->with('success', 'Account deleted successfully.');
        }
        else{
            return redirect()->back()->with('error2', 'You cannot delete. the only one account in the system.');
        }
     }
    
    public function profile(){
       $adminuser= adminuser::where('email', session('email'))->first();
      
       return view('admin.profile', compact('adminuser'));
    }
    
}
