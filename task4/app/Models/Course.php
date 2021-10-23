<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\STUDENT;

class Course extends Model
{
    use HasFactory;

    public $timestamps=false;

    public function course_students(){
        $this->hasMany(STUDENT::class,'NAME','ID');
    }
}
