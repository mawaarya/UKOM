<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Story extends Model
{
    use HasFactory;
    protected $fillable=[
        "user_id",
        "story",
        "status",
        "likes",
        "comment",

    ];

    /**
     * Get the user owns the Story 
     * 
     * @retrun \Illuminate\Database\Eloquent\Relations\BelongTo
     */
    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
