<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    protected $table = ('spp');
    public $timestamp = false;
    protected $fillable = ['tahun','nominal'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
