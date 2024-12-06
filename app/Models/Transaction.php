<?php

namespace App\Models;

use App\Models\Player;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'product_id',
        'type',
        'quantity',
        'unit_price',
        'total_price',
        'transaction_date',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function calculateTotalPrice()
    {
        return $this->quantity * $this->unit_price;
    }
}
