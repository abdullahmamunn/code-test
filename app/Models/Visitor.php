<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function urlInfo()
    {
        return $this->belongsTo(Url::class,'url_id','id');
    }
    public function visitors()
    {
        return $this->belongsToMany(Visitor::class,'url_id','id');
    }
}
