<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class UpdatePageController extends Controller
{
    public function update_kontak(Request $request, Kontak $update)
    {
        $kontak = $request->validate([
            'deskripsi' => 'required',
            'email' => ['email', 'required'],
            'telepon' => ['required'],
        ]);

        Kontak::create($kontak);
        $update->create($kontak);
        return redirect('/');
    }
}
