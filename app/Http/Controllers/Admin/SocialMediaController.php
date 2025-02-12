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
        'whatsapp' => 'nullable|string',
        'youtube' => 'nullable|url',
    ]);

    $social = SocialMedia::firstOrCreate([]);
    $social->facebook = $request->facebook;
    $social->twitter = $request->twitter;
    $social->instagram = $request->instagram;
    $social->linkedin = $request->linkedin;
    $social->whatsapp = $request->whatsapp;
    $social->youtube = $request->youtube;

    $social->save();

    return response()->json(['success' => true, 'message' => 'Social media updated successfully']);
  }

}
