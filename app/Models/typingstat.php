<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typingstat extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function difficulty(){
        return $this->belongsTo(difficulty::class);
    }
    public function language(){
        return $this->belongsTo(language::class);
    }
}
