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
}