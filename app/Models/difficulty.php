<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class difficulty extends Model
{
    // use HasFactory;
    public function words(){
        return $this->hasMany(wordModel::class);
    }
    public function diffculty_languages(){
        return $this->hasMany(diffculty_language::class);
    }
    public function typingstats(){
        return $this->hasMany(typingstat::class);
    }
}
