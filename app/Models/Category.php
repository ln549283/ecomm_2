<?php

namespace App\Models;

use App\Models\Player;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'unlock_cost'
    ];

    protected $dates = ['deleted_at'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'player_categories')
                    ->withPivot('unlocked_at')
                    ->withTimestamps();
    }

    public function unlock(): void
    {
        $this->is_unlocked = true;
        $this->save();
    }

    public function events()
    {
        return $this->morphMany(Event::class, 'target');
    }
}
