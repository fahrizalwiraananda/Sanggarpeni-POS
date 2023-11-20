<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id_produk';
    protected $table = 'products';
    protected $fillable = [
        'name',
        'id_kategori',
        'harga',
        'berat',
        'material',
        'size',
        'pelapis',
        'stok',
        'deskripsi',
        'image',
    ];

    public function category(){
        return $this->belongsTo(Kategori::class,'id_kategori','id_kategori');
    }
}
