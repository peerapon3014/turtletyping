<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class language extends Model
{
    // use HasFactory;
    public function words(){
        return $this -> hasMany(words::class);
    }
    public function lessonpart_n(){
        return $this->hasMany(lessonpart_n::class);
    }
    public function typingstats(){
        return $this->hasMany(typingstat::class);
    }
}
