<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminuser extends Model
{
    use HasFactory;
    protected $table = 'adminusers';
    protected $fillable = ['first_name','last_name', 'address','city','image','contact','username','email', 'password'];
}
