<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongTroModel extends Model
{
    protected $table ="phongtro";

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function post()
    {
        return $this->belongsTo('App\Motelroom', 'postmotelroom_id', 'id');
    }
    public function phongtro()
    {
        return $this->hasMany('App\KhachThueModel', 'phongthue_id', 'id');
    }
}
