<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbcController extends Controller
{
    public function index()
    {
        $site_settings = [
            'welcome' => setting('site.welcome'),
            'connection' => setting('site.connection')
        ];

        return view('home', [
            'site_settings' => $site_settings
        ]);
    }
}
