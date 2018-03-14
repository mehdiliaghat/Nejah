<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recordscore extends Model
{
    public function assignedcourses()
    {
        return $this->belongsTo(Assignedcourse::class);
    }
    public function students()
    {
        return $this->belongsTo(Student::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
