<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\kelas;
use App\Models\Spp;
use PDF;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = Siswa::orderBy('updated_at','desc')->orderBy('created_at','desc')->get();
        return view('siswa.index', compact('data_siswa'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        $spp = Spp::all();
        return view('siswa.create',compact('kelas','spp'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users',
            'nisn' => 'required',
            'nis' => 'required',
            'alamat' => 'required',
            'tlpn' => 'required',
        ]);

        //insert ke tabel user
        $user = new \App\Models\User;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('siswa');
        $user->role = 'siswa';
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = Siswa::create($request->all());
        return redirect('/siswa')->with('createsucces','create succes');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $spp = Spp::all();
        $kelas = Kelas::all();
        return view('siswa.edit', compact('siswa','spp','kelas'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nama' => 'required|min:5|max:16',
            'email' => 'required',
            'nisn' => 'required',
            'nis' => 'required',
            'alamat' => 'required',
            'tlpn' => 'required',
        ]);

        $siswa = Siswa::find($id);
        $spp = Spp::all();
        $kelas = Kelas::all();
        $siswa->update($request->all());
        $siswa->user->update([
            'email' => $request->email,
        ]);
        return redirect('/siswa')->with('updatesucces','updatesucces');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        $siswa->user->delete();
        return redirect('/siswa')->with('deletesucces','delete succes');
    }

    public function export()
    {
        $data_siswa = Siswa::all();
        $pdf = PDF::loadView('siswa.export', compact('data_siswa'));
        return $pdf->download('siswa.pdf');
    }
}