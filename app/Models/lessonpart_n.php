<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class lessonpart_n extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function lessontitle(){
        return $this->belongsTo(lessontitle::class,'lessontitle_id');
    }
    public function language(){
        return $this->belongsTo(language::class,'language_id');
    }
}
