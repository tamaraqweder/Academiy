<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public function lecturer()
{
    return $this->hasOne(lecturers::class, 'user_id');
}
}
