<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_info extends Model
{
    use HasFactory;

    protected $fillable = ['id','student_name', 'student_roll', 'student_phone',
    'student_email', 'student_address','student_department'];
}
