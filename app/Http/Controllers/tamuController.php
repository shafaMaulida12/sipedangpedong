<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bukuTamu;

class tamuController extends Controller
{
    public function index(){
        return view('tamu.index');
    }

    public function create(Request $request){
        $request->validate([
            'nama' => 'required',
            'asal' => 'required',
            'tanggal' => 'required',
            'tujuan' => 'required',
            'jumlah' => 'required',
            'materi' => 'required',
            'permohonan' => 'required',
            'pendamping' => 'required',
        ]);

        if ($request->hasFile('permohonan')) {
                $ext = $request->permohonan->getClientOriginalExtension();
                $permohonan = rand(1, 900)  . time() . '.' . $ext;
                $request->permohonan->move('permohonan', $permohonan);
        }
        if ($request->hasFile('pendamping')) {
                $ext = $request->pendamping->getClientOriginalExtension();
                $filename = rand(1, 900)  . time() . '.' . $ext;
                $request->pendamping->move('permohonan', $filename);
        }
        bukuTamu::create([
            'nama' => $request->nama,
            'asal' => $request->asal,
            'tanggal' => $request->tanggal,
            'tujuan' => $request->tujuan,
            'jumlah' => $request->jumlah,
            'materi' => $request->materi,
            'permohonan' => $permohonan,
            'pendamping' => $filename,
        ]);
        return redirect()->back()->with('success', 'berhasil melakukan pengajuan');
    }
}
