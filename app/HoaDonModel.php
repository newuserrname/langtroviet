<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDonModel extends Model
{
    protected $table = "hoadon";

    public function chutro()
    {
        return $this->belongsTo('App\User', 'chutro_id', 'id');
    }

    public function phongtro()
    {
        return $this->belongsTo('App\PhongtroModel', 'phongtro_id', 'id');
    }

    public function khachthue()
    {
        return $this->belongsTo('App\KhachThueModel', 'khachthue_id', 'id');
    }
}
