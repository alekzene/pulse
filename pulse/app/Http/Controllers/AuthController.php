<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\UserAuthen;

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

        // Pass the users to the view
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

         if ($user && $user->userPass === $request->userPass) {    //for checking if user exist and the password matches
            Auth::loginUsingId($user->userID);
            return redirect()->intended('feed');
        }

        return back()->withErrors([
            'loginError' => 'Invalid username or password.',
        ])->withInput();

        // return redirect('login')->withErrors([
        //     'userName' => 'The provided credentials do not match our records.',
        // ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function createAccount(Request $request)
    {
        // Your logic for creating an account goes here
        // For example, you can validate the request and save the user to the database
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:UserAuthen,userName',
            'email' => 'required|string|email|max:255|unique:UserAuthen,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        DB::table('UserAuthen')->insert([
            'userName' => $request->username,
            'userPass' => $request->password, // Consider hashing the password
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully. Please login.');
    }

    public function Help(Request $request) {
        return redirect()->route('help');
    }

    public function resetpassdone(Request $request)
    {
        return redirect()->route('login');
    }
}