<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessonpart extends Model
{
    use HasFactory;
    public function lessontitle(){
        return $this->belongsTo(lessontitle::class);
    }
    public function user_lessonparts(){
        return $this->hasMany(user_lessonpart::class);
    }
}
