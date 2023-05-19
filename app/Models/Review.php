<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $attributes = [
        'rating' => 3
    ];

    protected $fillable = [
        'hotel_id',
        'user_id',
        'rating',
        'title',
        'comment'
    ];

    protected $casts = [
        'rating' => 'integer'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
