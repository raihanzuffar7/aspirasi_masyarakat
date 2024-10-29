<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    protected $table = 'aspirasis';
    protected $fillable = ['nik', 'id_kategori', 'lokasi', 'keterangan'];

    //proteced $guarded ini juga bisa
}
