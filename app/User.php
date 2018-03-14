<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'national_id','post_id','role_id', 'first_name','last_name', 'email', 'password',
        'photo','sex','edu','phone','date_birth','address','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public $incrementing=false;
    public function assignedcourses()
    {
        return $this->hasMany(Assignedcourse::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function recordscores()
    {
        return $this->hasMany(Recordscore::class);
    }

    public function roles()
    {
        return $this->hasOne(Role::class);
    }
    private function checkIfUserHasRole($need_role)
    {
        return(strtolower($need_role)==strtolower($this->role->name)) ? true :null;
    }
    public function hasRole($roles)
    {
        if(is_array($roles))
        {
            foreach ($roles as $need_role)
            {
                if($this->checkIfUserHasRole($need_role))
                {
                    return true ;
                }
            }
        }else{
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }
}
