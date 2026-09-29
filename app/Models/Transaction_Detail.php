<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction_Detail extends Model
{
    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity',
        'price'
    ];

    protected $table = 'transaction__details';

    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
}
