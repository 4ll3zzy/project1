<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;
use PDF;

class SppController extends Controller
{
    public function index()
    {
        $data_spp = Spp::orderBy('updated_at','desc')->orderBy('created_at','desc')->get();
        return view('spp.index', compact('data_spp'));
    }

    public function create()
    {
        return view('spp.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required',
            'nominal' => 'required',
        ]);

        $spp = Spp::create($request->all());
        return redirect('/spp')->with('createsucces','createsucces');
    }

    public function edit($id)
    {
        $spp = Spp::find($id);
        return view('spp.edit', compact('spp'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'tahun' => 'required',
            'nominal' => 'required',
        ]);

        $spp = Spp::find($id);
        $spp->update($request->all());
        return redirect('/spp')->with('updatesucces','updatesucces');;
    }

    public function destroy($id)
    {
        $spp = Spp::find($id);
        $spp->delete();
        return redirect('/spp')->with('deletesucces','deletesucces');;
    }

    public function export()
    {
        $data_spp = Spp::all();
        $pdf = PDF::loadView('spp.export', compact('data_spp'));
        return $pdf->download('spp.pdf');
    }
}
