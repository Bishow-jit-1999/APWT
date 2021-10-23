<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;


class teacher extends Model
{
    use HasFactory;
    

    protected $table='teachers';
    public $timestamps=false;


    public function teachers(){
        return $this->belongsTo(Course::class,'COURSE_NAME','ID');
    }
}
