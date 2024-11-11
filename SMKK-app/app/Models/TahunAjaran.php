<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Ramsey\Uuid\Uuid;
// use Illuminate\Database\Eloquent\Concerns\HasUuids;

class TahunAjaran extends Model
{
    use HasFactory;
    // use HasUuids;

    protected $table = 'tahun_ajaran';
    protected $fillable = [
        'tahun_pelajaran',
        'semester'
    ];

    public function kelas()
    {
        return $this->hasMany('App\Models\Kelas');
    }

    // public function newUniqueId()
    // {
    //     return (string) Uuid::uuid4();
    // }
}
