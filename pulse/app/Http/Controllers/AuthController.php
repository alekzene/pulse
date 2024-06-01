<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\UserAuthen;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

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

        //  if ($user && $user->userPass === $request->userPass) {    //for checking if user exist and the password matches
        //     Auth::loginUsingId($user->userID);
        //     return redirect()->intended('feed');
        // }

        if ($user && Hash::check($request->userPass, $user->userPass)) {    //for checking if user exist and the password matches also adds password hashing
            Auth::loginUsingId($user->userID);
            return redirect()->intended('feed');
        }

        return back()->withErrors([
            'loginError' => 'Invalid username or password.',
        ])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
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

    public function Help(Request $request) {
        return redirect()->route('help');
    }

    public function resetpassdone(Request $request)
    {
        return redirect()->route('login');
    }
}