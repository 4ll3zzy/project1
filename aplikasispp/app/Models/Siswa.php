<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = ('siswa');
    public $timestamp = false;
    protected $fillable = ['nisn','nis','nama','alamat','tlpn','user_id','kelas_id','spp_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function spp()
    {
        return $this->belongsTo(Spp::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
