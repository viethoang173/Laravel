<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function category(){
        return $this->belongsTo(ProductsCategory::class);
    }
    protected $fillable = [
        'name',
        'amount',
        'price',
        'thumbnail',
        'category_id',
        'status',
        'description',
    ];
}
