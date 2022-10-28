<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;


    protected $table = 'review';


    protected $primarykey = 'id_review';

    protected $fillable =
    ['id_barang','waktu_review','nama','isi'];
}
