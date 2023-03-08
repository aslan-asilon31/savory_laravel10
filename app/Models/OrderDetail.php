<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';

    public $primaryKey = 'id';

    protected $keyType = 'string';

    public $timestamps = true;

    protected $fillable = [
        'order_id',
        'product_id',
        'qty',
        'price',
    ];
}
