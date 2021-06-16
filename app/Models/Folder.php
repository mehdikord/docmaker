<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='folders';

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }

    public function urls()
    {
        return $this->hasMany(Url::class,'folder_id');
    }
}
