<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang digunakan model ini (opsional, hanya jika berbeda dari default).
     */
    protected $table = 'products';

    /**
     * Kolom-kolom yang dapat diisi secara massal.
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];

    /**
     * Tipe data kolom yang perlu di-cast.
     */
    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
    ];
}
