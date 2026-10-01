<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'keluarga';

    protected $fillable = [
        'rumah_id',
        'no_kk',
        'nama_kk',
        'dokumen_kk',
    ];

    public function rumah()
    {
        return $this->belongsTo(Rumah::class);
    }

    public function warga()
    {
        return $this->hasMany(Warga::class);
    }
}
