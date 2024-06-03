<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\UserAuthen;

class UserInfoController extends Controller
{
    public function showProfile()
    {
        $userID = Auth::id();
        $user = UserAuthen::find($userID);
        $userInfo = DB::table('UserInfo')->where('userID', $userID)->first();
        
        return view('profile-2', compact('user', 'userInfo'));
    }

    public function updateUserInfo(Request $request)
    {
        $request->validate([
            'hometown' => 'nullable|string|max:255',
            'lives-in' => 'nullable|string|max:255',
            'elementary' => 'nullable|string|max:255',
            'high-school' => 'nullable|string|max:255',
            'college' => 'nullable|string|max:255',
            'work-at' => 'nullable|string|max:255',
            'birthday' => 'nullable|date',
        ]);

        DB::table('UserInfo')
            ->where('userID', Auth::id())
            ->update([
                'hometown' => $request->input('hometown'),
                'livesIn' => $request->input('lives-in'),
                'elementary' => $request->input('elementary'),
                'highschool' => $request->input('high-school'),
                'college' => $request->input('college'),
                'workAt' => $request->input('work-at'),
                'birthday' => $request->input('birthday'),
            ]);

            return response()->json(['success' => true]);
        }

    public function updateUserBio(Request $request)
    {
        $request->validate([
            'bio' => 'nullable|string',
        ]);

        DB::table('UserInfo')
            ->where('userID', Auth::id())
            ->update([
                'bio' => $request->input('bio'),
            ]);

        return response()->json(['success' => true]);
    }
}