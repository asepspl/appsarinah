<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id', 'item_id', 'quantity', 'price', 'tax', 'total_price', 'created_at', 'updated_at'];
    protected $dates = ['deleted_at'];
    

    public function order()
    {
        return $this->belongsTo(Orde::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }   
}
