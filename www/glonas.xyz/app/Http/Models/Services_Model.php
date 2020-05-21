<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Services_Model extends Model
{
    protected $table = 'services';
    public function getServices(){
        return $this
            ->select('services.*','file.image_link as file_link','file.name as file_name')
            ->leftJoin('file','services.id','file.services_id')
            ->get();
    }
}
