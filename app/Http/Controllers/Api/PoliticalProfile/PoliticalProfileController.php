<?php

namespace App\Http\Controllers\Api\PoliticalProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PoliticalProfile;

class PoliticalProfileController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'group_name' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'entity_type' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'founded_year' => 'nullable|integer',
            'publish_now' => 'boolean',

            'logo' => 'nullable|file|mimes:jpg,jpeg,png,webp|max:2048',
            'manifesto' => 'nullable|file|mimes:pdf,docx|max:4096',

            'ideologies' => 'nullable|array',
            'ideologies.*' => 'string|max:255',

            'website' => 'nullable|url',
            'telegram' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
        ]);


        $profile = new PoliticalProfile();
        $profile->fill($validated);

        if ($request->hasFile('logo')) {
            $profile->logo_path = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('manifesto')) {
            $profile->manifesto_path = $request->file('manifesto')->store('manifestos', 'public');
        }

        $profile->save();

        $profile->links()->create([
            'website' => $validated['website'] ?? null,
            'telegram' => $validated['telegram'] ?? null,
            'instagram' => $validated['instagram'] ?? null,
            'twitter' => $validated['twitter'] ?? null,
            'facebook' => $validated['facebook'] ?? null,
            'youtube' => $validated['youtube'] ?? null,
        ]);

        foreach ($validated['ideologies'] ?? [] as $ideology) {
            $profile->ideologies()->create([
                'ideology' => $ideology,
            ]);
        }

        return response()->json([
            'message' => '✅ Profile with files created.',
            'data' => $profile
        ], 201);
    }
}
