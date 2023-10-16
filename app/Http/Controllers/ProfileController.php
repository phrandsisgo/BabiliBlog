<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use App\Models\User;

class ProfileController extends Controller
{
    
    // Display all Users
    public function showProfile($id){
     // dd('The user blade works');
        $user = User::find($id);
            return view('displayUsers', ['user' => $user]);
    }


    public function uploadImg(Request $request) {

        // validate request
        $request->validate([
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation rules
            
        // Other validation rules for profile information
        ]);

        // Handle the profile picture upload
        if ($request->hasFile('profile_picture')) {
        
        // Check what happens when uploading two images with the same name. ***Create a UUID to rename the IMG with Laravel helper. 
        $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        $user = auth()->user(); // Get the currently authenticated user
        $user->profile_picture = $profilePicturePath;
        $user->save();

    }
}

    
    // Display the user's profile form.
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
