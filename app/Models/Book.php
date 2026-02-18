<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'nama',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'stock'
    ];

    public function order(){
        return $this->hasMany(order::class);
    }
}
