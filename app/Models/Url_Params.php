<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url_Params extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='url_params';

    public function url()
    {
        return $this->belongsTo(Url::class,'url_id');
    }
}
