<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public $primaryKey = 'id';

    protected $keyType = 'string';

    public $timestamps = true;

    protected $fillable = [
        'customer_id',
        'status',
        'order_date',
    ];
}
