<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $orders = Order::where('userId', Auth::id())->get();
        $totalOrders = $orders->count();
        return view('user.dashboard', compact('user', 'totalOrders'));
    }

    public function orders()
    {
        $orders = Order::where('userId', Auth::id())->get();
        return view('user.orders', compact('orders'));
    }

    public function editProfile()
    {
        return view('user.editProfile');
    }

    public function invoice($id)
    {
        $invoice = Invoice::where('orderId', decrypt($id))->first();
        return view('user.load.invoice', compact('invoice'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'mobile'   => 'required|digits:10',
            'password' => 'nullable|string|min:5',
        ]);

        $user = Auth::user();
        $user->username = $request->username;
        $user->mobile = $request->mobile;
        
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return response()->json(['status' => 1, 'message' => 'Profile updated successfully!']);
    }

}