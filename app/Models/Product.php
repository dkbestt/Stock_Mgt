<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = [
        'm_id',
        'product_name',
        'price',
        'qty',
        'remain_qty'
    ];

    public function merchant() {
        return $this->belongsTo(Merchant::class, 'm_id', 'id');
    }

}
