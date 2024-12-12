<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'effect_type',
        'target_type',
        'target_id',
        'value',
        'start_date',
        'end_date',
    ];

    public function isActive()
    {
        $now = now();
        return $this->start_date <= $now && $this->end_date >= $now;
    }

    public function target()
    {
        switch ($this->target_type) {
            case 'category':
                return $this->belongsTo(Category::class, 'target_id');
            case 'product':
                return $this->belongsTo(Product::class, 'target_id');
            default:
                return null; // Pour les cibles "globales"
        }
    }
}
