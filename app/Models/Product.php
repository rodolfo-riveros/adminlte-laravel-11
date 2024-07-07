<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'precio',
        'stock',
        'image',
        'manual'
    ];

    // Relación con Categoría
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Relación con Pedidos
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'product_id');
    }
}
