<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class wordModel extends Model
{
    use SoftDeletes;

    use HasFactory;
    public function difficulty(){
        return $this->belongsTo(difficulty::class);
    }
    public function language(){
        return $this->belongsTo(language::class);
    }
}
