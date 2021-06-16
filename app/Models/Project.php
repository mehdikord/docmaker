<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function folders()
    {
        return $this->hasMany(Folder::class,'project_id');

    }

    public function urls()
    {
        return $this->hasMany(Url::class,'project_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
