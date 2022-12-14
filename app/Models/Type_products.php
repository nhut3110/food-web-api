<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_products extends Model
{
    use HasFactory;
    protected $table = 'food_type';
    protected $fillable = ['name',  'created_at', 'updated_at'];
}
