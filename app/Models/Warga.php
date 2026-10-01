<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';

    protected $fillable = [
        'keluarga_id',
        'nama',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'no_hp',
        'alamat',
        'status_nikah',
        'hubungan_keluarga',
        'asal_warga',
        'asal_daerah',
        'tahun_mulai_tinggal',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class);
    }

    public function dokumen()
    {
        return $this->hasMany(Dokumen::class);
    }
}
