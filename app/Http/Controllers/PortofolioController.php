<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function create_porto(Request $request)
    {
        $porto = $request->validate([
            'title' => 'required',
            'kategori' => 'required',
            'image' =>  'image',
        ]);

        if ($request->hasFile('image')) {
            $porto['image'] = $request->file('image')->store('images');
        }

        Portofolio::create($porto);
        return back();

    }
}
