<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blacklist extends Model
{
    use HasFactory;
    protected $table = 'supplier_blacklist';
    protected $fillable = ['supplier_id'];
}
