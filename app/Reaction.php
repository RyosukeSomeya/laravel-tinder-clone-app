<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public $incrementing = false; // インクリメントIDの無効化
    public $timestamps = false; // update_at, created_atの無効化

    public function toUserId()
    {
        return $this->belongsTo('App\User', 'to_user_id', 'id');
    }

    public function fromUserId()
    {
        return $this->belongsTo('App\User', 'from_user_id', 'id');
    }
}
