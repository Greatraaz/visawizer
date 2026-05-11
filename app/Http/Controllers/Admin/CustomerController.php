<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserType;

class CustomerController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('admin.list.users', compact('users'));
    }

    public function viewUser($id)
    {
        $user = User::with('userType')->findOrFail($id);
        return view('admin.load.users', compact('user'));
    }

    public function deleteUser($id)
    {
        User::findOrFail(decrypt($id))->delete();
        return redirect('admin/users')->with('success', 'User deleted successfully.');
    }

    public function userType()
    {
        $types = UserType::all();
        return view('admin.list.userType', compact('types'));
    }

    public function editUserType($id)
    {
        $userType = UserType::findOrFail($id);
        return view('admin.update.userType', compact('userType'));
    }

    public function storeUserType(Request $request)
    {
        $request->validate([
            'userType' => 'required|unique:userType,userType|string|max:255',
            'status' => 'required|in:1,0',
        ]);

        $result = UserType::create($request->only('userType', 'status'));
        if ($result) {
            return response()->json(['status' => 1, 'message' => 'User type created successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Failed to create User type'], 500);
        }
    }

    public function updateUserType(Request $request)
    {
        $validated = $request->validate([
            'id'       => 'required|integer|exists:userType,id',
            'userType' => 'required|string|max:255|unique:userType,userType,' . $request->id,
            'status' => 'required|in:1,0',
        ]);

        $userType = UserType::find($validated['id']);
        $updated = $userType->update([
            'userType' => $request->userType,
            'status' => $request->status,
        ]);

        if ($updated) {
            return response()->json(['status' => 1, 'message' => 'User type updated successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Failed to update User type'], 500);
        }
    }


    public function deleteUserType($id)
    {
        UserType::findOrFail(decrypt($id))->delete();
        return redirect('admin/user-type')->with('success', 'User type deleted successfully.');
    }
}
