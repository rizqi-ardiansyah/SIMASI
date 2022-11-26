<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posko extends Model
{
    use HasFactory;

    protected $table = 'posko';
    protected $fillable = [
        'id',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'namaPosko',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
