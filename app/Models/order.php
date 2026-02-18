<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'anggota_id',
        'book_id',
        'tanggal_kembali',
        'tanggal_pinjam'
    ];

    public function anggota(){
        return $this->belongsTo(anggota::class);

    }

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
