<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Ramsey\Uuid\Uuid;
// use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Pembayaran extends Model
{
    use HasFactory;
    // use HasUuids;

    protected $table = 'pembayaran';
    protected $fillable = [
        'siswa_id ',
        'tanggal_pembayaran',
        'jumlah',
        'status_pembayaran',
        'total'
    ];

    public function siswa()
    {
        return $this->belongsTo('App\Models\Siswa');
    }
}
