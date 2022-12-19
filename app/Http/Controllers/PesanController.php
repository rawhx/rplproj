<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function view()
    {
        $pesan = Pesan::all();

        return view('admin/admin', [
            'pesan' => $pesan,
        ]); 
    }

    public function create_pesan(Request $request)
    {
        $pesan = $request->validate([
            'name' => 'required',
            'email' => ['email', 'required'],
            'subjek' => 'required',
            'pesan' => 'required',
        ]);

        // masih bug load
        if (Pesan::create($pesan)) {
            session()->flash('berhasil', 'Pesan anda berhasil terkirim. Terima kasih!');
        } else {
            session()->flash('gagal', 'Pesan anda gagal terkirim!');
        }
        
        return redirect('/#contact');
    }


}
