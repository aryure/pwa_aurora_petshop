<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table = "checkouts";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'user_id',
        'produk_id',
        'jumlah_barang',
    ];
}