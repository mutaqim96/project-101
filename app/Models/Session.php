<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $table = "SMP_Sesi";//based on database

    protected $primaryKey = "KodSesi_Sem";
}
