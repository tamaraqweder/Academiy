<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lecturers extends Model
{
    public function user()
    {
        return $this->belongsTo(users::class, 'user_id');
    }


    public function courses(){
        return $this->hasMany(courses::class);
    }
}