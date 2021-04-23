<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pembayaran;
use PDF;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::orderBy('updated_at','desc')->orderBy('created_at','desc')->get();
        $user = User::find(auth()->user()->id);
        return view('history.index',compact('pembayaran','user'));
    }

    public function export()
    {
        $pembayaran = pembayaran::all();
        $user = User::find(auth()->user()->id);
        $pdf = PDF::loadView('history.export', compact('pembayaran','user'));
        return $pdf->download('history.pdf');
    }
}
