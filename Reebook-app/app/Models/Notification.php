<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsTo;

class Notification extends Model
{
    use HasFactory;
    protected $fillable=[
        "type",
        "user_id",
        "message",
        "url",
        "read_at",
    ];

          /**
     * Get the user that owns the notification
     * 
     * @retrun \Illuminate\Database\Eloquent\Relations\BelongTo
     */
    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
