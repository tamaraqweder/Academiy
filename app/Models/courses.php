<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    public function lecturese(){
        return $this->belongsTo(lecturers::class);
    }
}
