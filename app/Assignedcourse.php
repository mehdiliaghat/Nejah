<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignedcourse extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function recordscores()
    {
        return $this->hasMany(Recordscore::class);
    }
}
