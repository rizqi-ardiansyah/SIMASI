<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Posko extends Model
{
    use HasFactory;

    protected $table = 'posko';
    protected $fillable = [
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'detail',
        'namaPosko',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
