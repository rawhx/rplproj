<?php

namespace App\Http\Controllers;

use App\Models\Kontak;

class ViewPageController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all()->first();
        return view('index', [
            'kontak' => $kontak,
        ]);
    }

    // admin page
}
