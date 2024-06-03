<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $user = Auth::user();
        $user->profilePic = $request->input('imageUrl');
        $user->save();

        return response()->json(['success' => true]);
    }
}