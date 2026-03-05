<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->groupBy('group');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        foreach ($request->except('_token', '_method') as $key => $value) {
            Setting::where('key', $key)->update(['value' => $value]);
        }

        return redirect()->back()->with('success', 'Pengaturan landing page berhasil diperbarui!');
    }
}
