<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDonModel extends Model
{
    protected $table = "hoadon";

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function khachthue()
    {
        return $this->belongsTo('App\KhachThueModel', 'khachthue_id', 'id');
    }
}
