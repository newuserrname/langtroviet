<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongTroModel extends Model
{
    protected $table ="phongtro";

    public function chutro()
    {
        return $this->belongsTo('App\User', 'chutro_id', 'id');
    }
}
