<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Ramsey\Uuid\Uuid;
// use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Siswa extends Model
{
    use HasFactory;
    // use HasUuids;

    protected $table = 'siswa';
    protected $fillable = [
        'user_id',
        'kelas_id',
        'nama_lengkap',
        'nim',
        'tanggal_lahir',
        'jenis_kelamin',
        'status',
        'alamat',
        'agama'
    ];
    protected $dates = ['tanggal_lahir'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas');
    }

    public function transaksi()
    {
        return $this->hasMany('App\Models\Transaksi');
    }

    public function pembayaran()
    {
        return $this->hasMany('App\Models\Pembayaran');
    }
}
