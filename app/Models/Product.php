<?php

namespace App\Models;

use App\Models\Category;
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
        'base_selling_price',
        'rank',
        'stock',
    ];

    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function profitMargin(): float
    {
        return $this->base_selling_price - $this->base_purchase_price;
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
