<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessontitle extends Model
{
    use HasFactory;
    public function lessonparts(){
        return $this->hasMany(lessonpart::class);
    }
}
