<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    /**
     * Update user language settings.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'locale' => 'required|string|in:en,pt',
        ]);

        $request->user()->update(['preferred_language' => $validated['locale']]);

        return Redirect::route('profile.edit')->with('status', 'language-updated');
    }
}
