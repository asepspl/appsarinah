<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use function Laravel\Prompts\table;

class Orde extends Model
{
    use SoftDeletes;

    protected $fillable = ['order_code', 'user_id', 'subtotal', 'tax', 'grand_total', 'status','table_number','payment_method','notes', 'created_at', 'updated_at'];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
