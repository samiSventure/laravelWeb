<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table='courses';
    public function student(){
        return $this->belongsTo(Student::class,'id');
    }
    public function students(){
        return $this->belongsToMany(Student::class,'');
    }
}
