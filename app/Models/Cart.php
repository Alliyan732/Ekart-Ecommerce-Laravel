<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = [
        'product_id',
        'product_qty',
    ];

    // to get the data from the product model
    public function products(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
