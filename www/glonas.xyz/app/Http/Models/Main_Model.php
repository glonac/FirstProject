<?php


namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Main_Model extends Model
{
    protected $table = 'main';
    public function getmain(){
        return $this->select('*')->get();
    }
}
