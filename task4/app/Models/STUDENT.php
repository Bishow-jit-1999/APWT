<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class STUDENT extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table="students";

    public function registerCourse(){
     
           return $this->hasMany(Course::class,'COURSE_NAME','ID');
        }

}
