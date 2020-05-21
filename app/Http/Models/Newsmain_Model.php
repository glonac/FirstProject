<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Newsmain_Model extends Model
{
    protected $table = 'newsmain';
    protected $fillable = ['id','name','description','content'];
    public function getnewsmain(){
        return $this->get();
    }
    public function getNewsById($id){
        return $this->where('id',$id)->get();
    }
}
