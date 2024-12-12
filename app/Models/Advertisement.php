<?php

namespace App\Models;

use App\Models\Player;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'type',
        'budget',
        'target_audience',
        'duration',
        'effectiveness',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
