<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DienModel extends Model
{
    protected $table = 'dienphongtro';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function phongtro()
    {
        return $this->belongsTo('App\PhongTroModel', 'phongtro_id', 'id');
    }
    public function khachthue()
    {
        return $this->belongsTo('App\KhachThueModel', 'khachthue_id', 'id');
    }
}
