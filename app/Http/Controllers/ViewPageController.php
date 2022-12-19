<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Portofolio;

class ViewPageController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all()->first();
        $porto = Portofolio::all();
        return view('index', [
            'kontak' => $kontak,
            'porto' => $porto,
        ]);
    }

    public function detail()
    {
        return view('detail');
    }

    public function edit_porto()
    {
        return view('admin/portofolio');
    }
}
