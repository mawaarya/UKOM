<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PageLike extends Model
{
    use HasFactory;
    protected $fillable=[
        "page_id",
        "user_id",
    ];

      /**
     * Get the group that owns the Post
     * 
     * @retrun \Illuminate\Database\Eloquent\Relations\BelongTo
     */
    public function page() : BelongsTo 
    {
        return $this->belongsTo(Page ::class, 'page_id');
    }

      /**
     * Get the user that owns the Pagelike
     * 
     * @retrun \Illuminate\Database\Eloquent\Relations\BelongTo
     */
    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
