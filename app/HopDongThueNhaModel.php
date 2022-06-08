<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HopDongThueNhaModel extends Model

{
    protected $table = "hopdong";

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function motelroom() {
        return $this->belongsTo('App\Motelroom', 'motelroom_id', 'id');
    }
    public function thanhtoan() {
        return $this->belongsTo('App\ThanhToanModel', 'thanhtoan_id', 'id');
    }
}
