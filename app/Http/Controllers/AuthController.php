<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage()
    {
        if (Auth::guard('web')->check()) {
            return redirect('my-account');
        }
        return view('user.login');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'mobile'   => 'required|digits:10|unique:users,mobile',
            'password' => 'required|string|min:5',
        ]);

        $user = User::create([
            'userTypeId' => 1,
            'username' => ucwords($request->username),
            'email'    => strtolower($request->email),
            'mobile'   => $request->mobile,
            'pass'   => $request->password,
            'password' => Hash::make($request->password),
            'status'   => 1,
        ]);
        Auth::guard('web')->login($user);
        return response()->json(['status' => 1, 'message' => 'Signup successful!']);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->where('status', 1)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::guard('web')->login($user);
                $request->session()->regenerate();
                return response()->json(['status' => 1,'message' => 'Login successful!']);
            }
            return response()->json(['status' => 0,'message' => 'Password is wrong']);
        }
        return response()->json(['status' => 0,'message' => 'Email is not registered with us!']);
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}