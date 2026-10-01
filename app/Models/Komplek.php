<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komplek extends Model
{
    protected $table = 'komplek';

    protected $fillable = [
        'nama_komplek',
    ];

    public function rumah()
    {
        return $this->hasMany(Rumah::class);
    }
}
