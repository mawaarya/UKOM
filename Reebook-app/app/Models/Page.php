<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsTo;
use Illuminate\Database\Eloquent\HasMany;

class Page extends Model
{
    use HasFactory;
    protected $fillable=[
        "uuid",
        "user_id",
        "icon",
        "thumbnail",
        "description",
        "name",
        "location",
        "type",
        "members",
        "is_private",
    ];

      /**
     * Get the user that owns the post
     * 
     * @retrun \Illuminate\Database\Eloquent\Relations\BelongTo
     */
    public function page() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

      /**
     * Get all of the posts that for the page
     * 
     * @retrun \Illuminate\Database\Eloquent\Relations\BelongTo
     */
    public function post() : hasMany
    {
        return $this->hanHany(Post::class);
    }
}
