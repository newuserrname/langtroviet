<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BilldiennuocModel extends Model
{
    protected $table = "billeaw";

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function motelroom()
    {
        return $this->belongsTo('App\Motelroom', 'motelroom_id', 'id');
    }
}
