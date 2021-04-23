<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::orderBy('updated_at','desc')->orderBy('created_at','desc')->get();
        $user = User::find(auth()->user()->id);
        return view('dashboard.index',compact('pembayaran','user'));
    }
}
