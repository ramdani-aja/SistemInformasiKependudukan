<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $table = 'dokumen';

    protected $fillable = [
        'warga_id',
        'jenis_dokumen',
        'nama_file',
        'file_path',
    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
}
