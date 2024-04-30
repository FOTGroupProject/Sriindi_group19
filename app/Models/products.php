<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = 
    ['name',
    'sdescription',
    'image',
    'sku',
    'category',
    'quantity',
    'regularprice',
    'salesprice',
    'supplier_id'];
}
