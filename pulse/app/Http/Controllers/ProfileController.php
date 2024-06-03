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

        // Get the user ID
    $userID = Auth::id();

    // Check if the user already has a UserInfo entry
    $userInfo = DB::table('UserInfo')->where('userID', $userID)->first();

    // If the user doesn't have a UserInfo entry, create one
    if (!$userInfo) {
        // Insert a new UserInfo entry for the user
        $infoID = DB::table('UserInfo')->insertGetId([
            'userID' => $userID,
            // Add other default values as needed
        ]);

        // Now retrieve the newly created UserInfo entry
        $userInfo = DB::table('UserInfo')->where('infoID', $infoID)->first();
    }

    // Update the profilePic field in UserInfo
    DB::table('UserInfo')
        ->where('userID', $userID)
        ->update([
            'profilePic' => $imageName
        ]);

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

    if (!$userInfo) {

        $userInfo = (object) [
            'profilePic' => asset('img/2nd-icon-user-profile.png'),
            'bio' => 'This user has not provided any bio yet.', 
        ];
    }

    return view('navbar', ['userInfo' => $userInfo]);
}
}