<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "RKD01_Peribadi";//based on database

    protected $primaryKey = "RKD01_NoMatrik";

    //define dia punya relationship.
    public function semester()
    {
        return $this->hasMany(StudentSemester::class,'RKD01_Nomatrik', 'RKD01_Nomatrik');
    }
}
