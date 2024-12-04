<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    //
    public function login()
    {
        return view('users/login');
    }

    public function UserAuth(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->with('status', 'You are logged in!');
        }

        return back()->withInput($request->only('email'))->withErrors([
            'email' => 'الايميل أو كلمة السر خاطئة',
        ]);
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }


    public function index()
    {
        $users = User::all();
        return view('users.ListUsers', ['users' => $users]);
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('users.UserAdd');
    }

    // Store a newly created user in storage
    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'profile_img' => 'sometimes|file|image|max:5000',
    ]);

    // Handle the file upload
    if ($request->hasFile('profile_img')) {
        $file = $request->file('profile_img');
        // Generate a unique filename using UUID
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/profile_images', $filename);

        // Add the filename to the validated data array
        $validatedData['profile_img'] = $filename;
    }

    // Hash the password
    $validatedData['password'] = Hash::make($validatedData['password']);

    // Create the user
    $user = User::create($validatedData);

    // Redirect or return response
    return redirect('/users/UsersList')->with('success', 'User added successfully.');
}

    // Show the form for editing the specified user
    public function edit(User $user)
    {
        $user = User::find($user->id);
        return view('users.UserEdit', ['user' => $user]);
    }

    // Update the specified user in storage
    public function update(Request $request, User $user)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'sometimes|min:8',
            'profile_img' => 'nullable|file|image|max:5000',
        ]);
    
        // Check if a new profile image was uploaded
        if ($request->hasFile('profile_img')) {
            // Delete the old image if it exists and is not the default image
            if ($user->profile_img && $user->profile_img !== 'user.png') {
                Storage::disk('public')->delete("profile_images/{$user->profile_img}");
            }
    
            // Store the new image with a unique filename
            $file = $request->file('profile_img');
            $filename = 'user_' . $user->id . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/profile_images', $filename);
    
            // Add the filename to the validated data array
            $validatedData['profile_img'] = $filename;
        } else {
            // If no new image is provided, keep the current image
            $validatedData['profile_img'] = $user->profile_img;
        }
    
        // Hash the password if it's provided
        if (!empty($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }
    
        // Update the user with the validated data
        $user->update($validatedData);
    
        // Redirect or return response
        return redirect('/users/UsersList')->with('success', 'User updated successfully.');
    }
    



    // Remove the specified user from storage
    public function destroy(User $user)
    {
        $user->delete();
        Storage::disk('public')->delete("profile_images/{$user->profile_img}");


        return redirect('/users/UsersList')->with('success', 'User deleted successfully!');
    }

    public function toggleStatus(User $user)
    {
        $user->status = $user->status === 'active' ? 'inactive' : 'active';
        $user->save();

        return redirect('/users/UsersList')->with('success', 'User status changed successfully!');
    }
}
