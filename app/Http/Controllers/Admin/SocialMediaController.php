<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    public function index()
    {
        $social = SocialMedia::first();
        return view('admin.setting.social', compact('social'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        $social = SocialMedia::first();
        if (!$social) {
            $social = new SocialMedia();
        }

        $social->facebook = $request->facebook;
        $social->twitter = $request->twitter;
        $social->instagram = $request->instagram;
        $social->linkedin = $request->linkedin;

        $social->save();

        return response()->json(['success' => true, 'message' => 'Social media updated successfully']);
    }
}
