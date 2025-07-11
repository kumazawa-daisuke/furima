<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_id',
        'content',
    ];

    // コメント投稿ユーザー
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 対象商品
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
