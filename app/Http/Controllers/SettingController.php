<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            $setting = Setting::where('key', $key)->first();
            
            if (!$setting) continue;

            if ($setting->type === 'image' && $request->hasFile($key)) {
                // Hapus gambar lama jika ada
                if ($setting->value && !filter_var($setting->value, FILTER_VALIDATE_URL)) {
                    Storage::disk('public')->delete($setting->value);
                }
                
                // Simpan gambar baru
                $path = $request->file($key)->store('settings', 'public');
                $setting->update(['value' => $path]);
            } else {
                $setting->update(['value' => $value]);
            }
        }

        return redirect()->back()->with('success', 'Pengaturan landing page berhasil diperbarui!');
    }
}
