<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang sudah ada di database kamu
    protected $table = 'items';

    protected $fillable = [
    'name',
    'price',
    'quantity',
    'category_id',
    ];
}
