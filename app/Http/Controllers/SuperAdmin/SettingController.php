<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
      public function show()
    {
        $setting = Setting::first();  
        return view('super.settings', compact('setting'));
    }

   
      public function update(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'facebook' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', 
        ]);

        $setting = Setting::first(); 

  
        if (!$setting) {
            $setting = new Setting();
        }

      
         if ($request->hasFile('logo')) {
        // Generate a unique name for the image
        $extension = $request->logo->getClientOriginalExtension();
        $uniquePart = rand(99999, 11111);
        $imageName = 'LOGOIMG_' . $uniquePart . '.' . $extension;

        // Define the upload path and move the image
        $uploadPath = public_path('storage/logos/');
        $request->logo->move($uploadPath, $imageName);

        // If there's an existing logo, delete it
        if ($setting->logo && file_exists($uploadPath . $setting->logo)) {
            unlink($uploadPath . $setting->logo);
        }

        // Update the logo field in the settings
        $setting->logo = $imageName;
    }

    // Update other fields except the logo
    $setting->fill($request->except('logo'));

    // Save the settings
    $setting->save();


        return redirect()->route('super.settings')->with('success', 'Settings updated successfully!');
    }
}
