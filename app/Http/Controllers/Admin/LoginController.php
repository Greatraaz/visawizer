<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;                 

class LoginController extends Controller
{
    public function adminLogin(Request $request)
    {
        $request->validate([
            'email'    => ['required','email:rfc,dns'],
            'password' => ['required','string'],
        ]);

        $email    = trim(strtolower($request->input('email')));
        $password = $request->input('password');

        $admin = Admin::where('email', $email)->first();

        if (! $admin) {
            return back()->withErrors([
                'email' => 'Email is not registered with us.',
            ])->onlyInput('email');
        }

        if (! Hash::check($password, $admin->password)) {
            return back()->withErrors([
                'password' => 'Invalid password',
            ])->onlyInput('email');
        }
        Auth::guard('admin')->login($admin);
        $request->session()->regenerate();
        return redirect()->intended('admin/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('admin/login');
    }
}
