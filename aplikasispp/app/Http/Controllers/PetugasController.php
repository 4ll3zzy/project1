<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class PetugasController extends Controller
{
    public function index()
    {
        $data_petugas = User::where('role','petugas')->orderBy('updated_at','desc')->orderBy('created_at','desc')->get();
        return view('petugas.index', compact('data_petugas'));
    }

    public function create()
    {
        return view('petugas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);

        $petugas = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('petugas'),
            'role' => 'petugas',
            'remember_token' => str_random(60),
        ]);

        return redirect('/petugas')->with('createsucces','create succes');
    }

    public function edit($id)
    {
        $petugas = User::find($id);
        return view('petugas.edit', compact('petugas'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $petugas = User::find($id);
        $petugas->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect('/petugas')->with('updatesucces','updatesucces');
    }

    public function destroy($id)
    {
        $petugas = User::find($id);
        $petugas->delete();
        return redirect('/petugas')->with('deletesucces','deletesucces');
    }

    public function export()
    {
        $data_petugas = User::where('role','petugas')->get();
        $pdf = PDF::loadView('petugas.export', compact('data_petugas'));
        return $pdf->download('petugas.pdf');
    }
}
