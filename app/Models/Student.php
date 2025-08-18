<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table='my_students';
    public function profile(){
     return $this->hasOne(Profile::class,'ST_ID');
    }
    public function cousre(){
        return $this->hasMany(Course::class,'studentId');
    }
}
