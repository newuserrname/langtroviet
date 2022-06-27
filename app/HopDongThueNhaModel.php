<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HopDongThueNhaModel extends Model

{
    protected $table = "hopdong";

    public function chutro() {
        return $this->belongsTo('App\User', 'chutro_id', 'id');
    }
    public function phongchothue()
    {
        return $this->beLongsTo('App\PhongChoThueModel', 'khachthue_id', 'id');
    }
    public function thanhtoan() 
    {
        return $this->belongsTo('App\ThanhToanModel', 'thanhtoan_id', 'id');
    }
    
}
