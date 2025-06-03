<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\Booking;
use App\Models\Review;

class AuthController extends Controller
{
    // Show login form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Show register form
    public function showRegister()
    {
        return view('auth.register');
    }

    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard'); // ✅ if admin
            } else {
                return redirect()->route('homepage'); // ✅ if normal user
            }
        }
    
        throw ValidationException::withMessages([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }

    // Handle registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'required|numeric|digits_between:10,15',
            'password' => 'required|min:6|confirmed'
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user' // ✅ explicitly assign role here
        ]);
    
        Auth::login($user);
    
        return redirect()->route('homepage'); // ✅ Cleaner to use route name instead of hard URL
    }

    public function edit()
    {
        $user = Auth::user();
         // Get all bookings for the current user, with homestay data
        $bookings = Booking::with('homestay')
                ->where('cust_id', $user->id)
                ->orderBy('start_date', 'desc')
                ->get();
        
        $reviews = Review::where('cust_id', $user->id)->get()->keyBy('booking_id');

        return view('home/viewProfile', compact('user', 'bookings', 'reviews'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        $user->update($validated);

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }
    

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/home/homepage');
    }
}

