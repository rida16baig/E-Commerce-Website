<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manageUsers()
    {
        $users = User::whereNot('role', 'admin')->get();
        return view('admin.users.manage', compact('users'));
    }
    public function editUser($id)
    {
        $user = User::find(decrypt($id));
        return view('admin.users.edit', compact('user'));
    }
    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email' ,
            'role' => 'required|in:customer,vendor',
            'password' => 'nullable|min:6|max:20',
        ]);

        $user = User::find(decrypt($id));
        if ($user) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->password = Hash::make($request->password); 
            $user->save();

            return redirect()->route('admin.manage-users')->with('success', 'User updated successfully.');
        }

        return redirect()->route('admin.manage-users')->with('error', 'User not found.');
    }
    public function deleteUser($id)
    {
        $user = User::find(decrypt($id));
        if ($user) {
            $user->delete();
            return redirect()->route('admin.manage-users')->with('success', 'User deleted successfully.');
        }
        return redirect()->route('admin.manage-users')->with('error', 'User not found.');
    }
}
