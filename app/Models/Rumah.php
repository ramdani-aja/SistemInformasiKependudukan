<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    protected $table = 'rumah';

    protected $fillable = [
        'komplek_id',
        'nomor_rumah',
        'alamat',
        'latitude',
        'longitude',
    ];

    public function komplek()
    {
        return $this->belongsTo(Komplek::class);
    }

    public function keluarga()
    {
        return $this->hasMany(Keluarga::class);
    }
}
