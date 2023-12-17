<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducateM extends Model
{
    protected $table = "edu_tbl";
    protected $fillable = ['id', 'name', 'status', 'created_at', 'updated_at'];
    use HasFactory;
    public function Educate()
    {
        return $this->hasOne(CourseCateModel::class);
    }
}
