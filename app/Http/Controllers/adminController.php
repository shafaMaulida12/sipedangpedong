<?php

namespace App\Http\Controllers;

use App\Models\bukuTamu;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function kirimPesan($id)
    {

        $tamu = bukuTamu::where('id', $id)->first();
        $tamu->update(['status' => 'konfirmasi']);

        $nomor = '62' . $tamu->no_tlp;

        $pesan = urlencode("Halo, Permohonan kamu telah di setujui oleh DPRD cianjur.");

        return redirect("https://wa.me/{$nomor}?text={$pesan}");
    }
}
