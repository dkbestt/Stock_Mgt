<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;
    protected $table = "merchant";
    protected $fillable = [
        'name',
        'email',
        'mobile_no',
    ];

    public function product($value)
    {
        $this->hasMany(Product::class, 'm_id', 'id');
    }
}
