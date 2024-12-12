<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $casts = [
        'balance' => 'float', // Assure que balance est un float
    ];
    
    protected $fillable = [
        'name',
        'balance',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'player_categories')
                    ->withPivot('unlocked_at')
                    ->withTimestamps();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'player_products')
                    ->withPivot('stock', 'purchase_price', 'unlocked_at')
                    ->withTimestamps();
    }

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
