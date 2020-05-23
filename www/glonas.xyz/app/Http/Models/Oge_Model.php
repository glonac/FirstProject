<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Oge_Model extends Model
{

    protected $table = 'oge';
    public function getoge(){
        return $this->select('*')->first();
    }

}
