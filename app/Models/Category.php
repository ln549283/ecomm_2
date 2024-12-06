<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'unlock_cost',
        'is_unlocked',
    ];

    protected $dates = ['deleted_at'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function isUnlocked(): bool
    {
        return $this->is_unlocked;
    }

    public function unlock(): void
    {
        $this->is_unlocked = true;
        $this->save();
    }
}
