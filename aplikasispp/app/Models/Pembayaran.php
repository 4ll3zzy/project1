<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = ('pembayaran');
    public $timestamp = false;
    protected $fillable = ['petugas_id','siswa_id','bulan','bayar'];

    public function user()
    {
        return $this->belongsTo(User::class,'petugas_id','id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
