<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use PDF;

class KelasController extends Controller
{
    public function index()
    {
        $data_kelas = Kelas::orderBy('updated_at','desc')->orderBy('created_at','desc')->get();
        return view('kelas.index', compact('data_kelas'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('kelas.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kompetensikeahlian' => 'required',
        ]);

        $kelas = Kelas::create($request->all());
        return redirect('/kelas')->with('createsucces','createsucces');
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nama' => 'required',
            'kompetensikeahlian' => 'required',
        ]);

        $kelas = Kelas::find($id);
        $kelas->update($request->all());
        return redirect('/kelas')->with('updatesucces','updatesucces');
    }

    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('/kelas')->with('deletesucces','deletesucces');;
    }

    public function export()
    {
        $data_kelas = Kelas::all();
        $pdf = PDF::loadView('kelas.export', compact('data_kelas'));
        return $pdf->download('kelas.pdf');
    }
}
