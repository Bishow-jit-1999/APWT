<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DOCTOR extends Model
{
    use HasFactory;
    protected $table='doctors';
    public $timestamps=false;

    public function appointmentDOC(){
        return $this->hasMany(APPOINTMENT::class,'DOCTOR_ID');
    }
}
