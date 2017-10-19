<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * App\Models\Comment
 *
 * @mixin \Eloquent
 */
class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = [
      "text", "user_id", "post_id"
    ];

    public function post(){
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
