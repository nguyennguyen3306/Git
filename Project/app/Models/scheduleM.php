<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scheduleM extends Model
{
    protected $table = "class_schedule";
    protected $fillable = ['id', 'idTeacher', 'schedule', 'idcourse', 'updated_at', 'created_at'];
    use HasFactory;
}

// {
//     protected $table = "role_tbl";
//     protected $fillable = ['id','name','status','created_at','updated_at'];
//     use HasFactory;
// }
