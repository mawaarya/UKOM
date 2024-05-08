<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=[
        "post_id",
        "user_id",
        "comment",
        "status",
        
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

     /**
     * Get the post that owns the Comment
     * 
     * @retrun \Illuminate\Database\Eloquent\Relations\BelongTo
     */
    public function post() : BelongsTo 
    {
        return $this->belongsTo(Post::class);
    }
}
