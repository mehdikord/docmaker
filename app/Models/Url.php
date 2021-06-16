<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='urls';

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }

    public function params()
    {
        return $this->hasMany(Url_Params::class,'url_id');
    }
}
