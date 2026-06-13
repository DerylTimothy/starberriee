<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Tambahkan baris ini agar field bisa diisi (Mass Assignment)
    protected $fillable = ['name', 'price', 'image'];
}