<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'customer_name',
        'customer_phone',
        'customer_address',
        'payment_method',
        'total_price',
        'status'
    ];

    // Hubungan relasi balik ke model Product (Satu pesanan punya satu produk)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}