<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesProduct extends Model
{
    use HasFactory;
    protected $table = 'category_product';
    protected $fillable = ['cat_name', 'cat_description', 'cat_status'];
}
