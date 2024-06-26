<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function uploadProfileImage(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->profile_image->extension();

        $request->profile_image->storeAs('public/profile_images', $imageName);

        return response()->json(['url' => asset('storage/profile_images/' . $imageName)]);
    }

    public function updateProfileImageUrl(Request $request)
    {
        $userID = Auth::id();  
         
        DB::table('UserInfo')
            ->where('userID', $userID)
            ->update([
                'profilePic' => $request->input('imageUrl')
            ]);

        return response()->json(['success' => true]);
    }

    public function getProfileInfo()
    {
        $user = Auth::user();
        $userInfo = DB::table('UserInfo')
            ->where('userID', $user->id)
            ->first();

        return view('navbar', ['userInfo' => $userInfo]);
    }
}