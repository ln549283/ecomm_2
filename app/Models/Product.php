<?php

namespace App\Models;

use App\Models\Event;
use App\Models\Player;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'base_purchase_price',
        'ideal_selling_price',
        'unlock_price',
        'rank',
        'stock',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'player_products')
                    ->withPivot('stock', 'purchase_price', 'unlocked_at')
                    ->withTimestamps();
    }

    public function events()
    {
        return $this->morphMany(Event::class, 'target');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function isOutOfStock(): bool
    {
        return $this->stock <= 0;
    }

    public function reduceStock(int $quantity): bool
    {
        if ($this->stock < $quantity) {
            return false;
        }

        $this->stock -= $quantity;
        $this->save();

        return true;
    }
}
