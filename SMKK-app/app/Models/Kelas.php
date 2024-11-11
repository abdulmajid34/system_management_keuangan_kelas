<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Ramsey\Uuid\Uuid;
// use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Kelas extends Model
{
    use HasFactory;
    // use HasUuids;

    protected $table = 'kelas';
    protected $fillable = [
        'tahun_ajaran_id',
        'kode_kelas',
        'no_ruangan',
        'fakultas',
        'program_studi'
    ];

    public function tahun_ajaran()
    {
        return $this->belongsTo('App\Models\TahunAjaran');
    }

    public function siswa()
    {
        return $this->hasMany('App\Models\Siswa');
    }

    // public function newUniqueId()
    // {
    //     return (string) Uuid::uuid4();
    // }
}
