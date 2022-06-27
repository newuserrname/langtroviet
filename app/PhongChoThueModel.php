<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongChoThueModel extends Model
{
    protected $table = "phongchothue";

    public function chutro()
    {
        return $this->belongsTo('App\User', 'chutro_id', 'id');
    }
    public function phongtro()
    {
        return $this->belongsTo('App\PhongTroModel', 'phongthue_id', 'id');
    }
    public function khachthueone()
    {
        return $this->belongsTo('App\KhachThueModel', 'khachthue_id', 'id');
    }
    public function khachthuetwo()
    {
        return $this->belongsTo('App\KhachThueModel', 'khachthue2_id', 'id');
    }
    public function khachthuethree()
    {
        return $this->belongsTo('App\KhachThueModel', 'khachthue3_id', 'id');
    }
}
