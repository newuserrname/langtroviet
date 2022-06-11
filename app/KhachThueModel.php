<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachThueModel extends Model
{
    protected $table ="khachthue";

    public function user()
    {
        return $this->belongsTo('App\User','user_id', 'id');
    }
    public function phongtro()
    {
        return $this->belongsTo('App\PhongTroModel', 'phongthue_id', 'id');
    }
    public function hopdongkhach()
    {
        return $this->hasMany('App\KhachThueModel', 'khachthue_id', 'id');
    }
    
}
