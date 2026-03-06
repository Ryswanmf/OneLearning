<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $policies = PrivacyPolicy::orderBy('order')->get();
        return view('admin.bantuan.kebijakanprivasi.index', compact('policies'));
    }

    public function create()
    {
        return view('admin.bantuan.kebijakanprivasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'order' => 'required|integer',
        ]);

        PrivacyPolicy::create($validated);

        return redirect()->route('admin.privacy-policy.index')->with('success', 'Kebijakan privasi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $policy = PrivacyPolicy::findOrFail($id);
        return view('admin.bantuan.kebijakanprivasi.edit', compact('policy'));
    }

    public function update(Request $request, $id)
    {
        $policy = PrivacyPolicy::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'order' => 'required|integer',
        ]);

        $policy->update($validated);

        return redirect()->route('admin.privacy-policy.index')->with('success', 'Kebijakan privasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $policy = PrivacyPolicy::findOrFail($id);
        $policy->delete();
        return redirect()->route('admin.privacy-policy.index')->with('success', 'Kebijakan privasi berhasil dihapus.');
    }
}
