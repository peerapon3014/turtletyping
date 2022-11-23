<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class words extends Model
{
    use HasFactory;
    use SoftDeletes;

    use HasFactory;
    public function difficulty(){
        return $this->belongsTo(difficulty::class,'difficulties_id');
    }
    public function language(){
        return $this->belongsTo(language::class,'languages_id');
    }
}
