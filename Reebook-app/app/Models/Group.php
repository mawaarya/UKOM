<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
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
     * Get the user that owns the group
     * 
     * @retrun \Illuminate\Database\Eloquent\Relations\BelongTo
     */
    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
