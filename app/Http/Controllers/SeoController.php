<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function show()
    {
        $gtm = Setting::where('key', 'gtm_code')->first();
        return view('seo', [
            'gtm_code' => $gtm ? $gtm->value : ''
        ]);
    }

    public function saveGtm(Request $request)
    {
        $request->validate([
            'gtm_code' => 'nullable|string'
        ]);

        Setting::updateOrCreate(
            ['key' => 'gtm_code'],
            ['value' => $request->gtm_code]
        );

        return redirect()->route('seo')->with('success', 'GTM код сохранён!');
    }
}
