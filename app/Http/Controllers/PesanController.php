<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function view()
    {
        
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
        Pesan::create($pesan);
        return back();
    }


}
