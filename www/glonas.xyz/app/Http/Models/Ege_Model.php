<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Ege_Model extends Model
{
    protected $table = 'ege';
    public function getEge(){
        return $this->select('*')->first();
    }

}
