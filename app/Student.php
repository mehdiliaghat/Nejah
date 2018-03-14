<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function assignedcourses()
    {
        return $this->belongsToMany(Assignedcourse::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function recordscores()
    {
        return $this->hasMany(Recordscore::class);
    }

}
