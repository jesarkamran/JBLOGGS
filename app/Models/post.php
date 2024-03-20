<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    public static function getAllPosts()
    {
        return post::all();
    }
    protected $fillable = [
        'title',
        'sub_title',
        'content',
        'image_url',
        'likes',
        'dis_likes',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getPostWithUser($postId)
    {
        return self::with('user')->find($postId);
    }
}
