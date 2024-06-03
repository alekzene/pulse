<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\UserAuthen;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function index()
    {
        // Fetch all users from the UserAuthen table
        $users = DB::table('UserAuthen')->get();

        return view('tables', compact('users'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'userName' => 'required|string',
            'userPass' => 'required|string',
        ]);

        $user = DB::table('UserAuthen')                           //retrieves the user from the database
                  ->where('userName', $request->userName)
                  ->first();

        if ($user && Hash::check($request->userPass, $user->userPass)) {    //for checking if user exist and the password matches also adds password hashing
            Auth::loginUsingId($user->userID);
            return redirect()->intended('profile-2');
        }

        return back()->withErrors([
            'loginError' => 'Invalid username or password.',
        ])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function createAccount(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female',
            'username' => 'required|string|max:255|unique:UserAuthen,userName',
            'email' => 'required|string|email|max:255|unique:UserAuthen,email',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'password.min' => 'The password must be at least 8 characters long.',
        ]);

        DB::table('UserAuthen')->insert([
            'userName' => $request->username,
            'userPass' => Hash::make($request->password), // Password Hased
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully. Please login.');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'password.min' => 'The password must be at least 8 characters long.',
        ]);

        $user = DB::table('UserAuthen')
            ->where('userName', $request->username)
            ->first();

        if (!$user) {
            return back()->withErrors([
                'resetError' => 'Username not found.',
            ])->withInput();
        }

        DB::table('UserAuthen')
            ->where('userName', $request->username)
            ->update([
                'userPass' => Hash::make($request->password),
            ]);

        return redirect()->route('reset-pass-done');
    }

    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:UserAuthen,email,' . Auth::id() . ',userID',
        ]);

        DB::table('UserAuthen')
            ->where('userID', Auth::id())
            ->update(['email' => $request->email]);

        return redirect()->route('privacy')->with('success', 'Email updated successfully.');
    }

   public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = DB::table('UserAuthen')
            ->where('userID', Auth::id())
            ->first();

        if (!Hash::check($request->current_password, $user->userPass)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        DB::table('UserAuthen')
            ->where('userID', Auth::id())
            ->update(['userPass' => Hash::make($request->new_password)]);

        return redirect()->route('privacy')->with('success', 'Password updated successfully.');
    }

    public function Help(Request $request) {
        return redirect()->route('help');
    }

    public function resetpassdone(Request $request)
    {
        return redirect()->route('login');
    }
}