<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'total',
        'status',
        'user_id',
        ];
    protected $casts =[
        'total' => 'decimal:2',
    ];
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function order_items() : HasMany {
        return $this->hasMany(Order_items::class);
    }
}
