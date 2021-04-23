<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Siswa;

class PembayaranController extends Controller
{
    public function index()
    {
        $data_pembayaran = Pembayaran::orderBy('updated_at','desc')->orderBy('created_at','desc')->get();
        return view('pembayaran.index', compact('data_pembayaran'));
    }

    public function create()
    {
        return view('pembayaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'bayar' => 'required',
        ]);

        $siswa = Siswa::where('nisn',$request->nisn)->get();
        foreach ($siswa as $val) {
            $siswa_id = $val->id;
        }
        $pembayaran = Pembayaran::create([
            'petugas_id' => auth()->user()->id,
            'siswa_id' => $siswa_id,
            'bulan' => $request->bulan,
            'bayar' => $request->bayar,
        ]);
        return redirect('/pembayaran');
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('pembayaran.edit', compact('pembayaran'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nisn' => 'required',
            'bayar' => 'required',
        ]);

        $pembayaran = pembayaran::find($id);
        $pembayaran->update($request->all());
        return redirect('/pembayaran');
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();
        return redirect('/pembayaran');
    }
}
