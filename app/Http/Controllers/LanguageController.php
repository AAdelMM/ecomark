<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLanguage($locale)
    {
        // Validate locale
        if (array_key_exists($locale, config('app.available_locales'))) {
            session(['locale' => $locale]);
        }

        return redirect()->back();
    }//
}
