<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary_template extends Model
{
    protected $table = 'salary_templates';
    protected $primaryKey = 'id';
    protected $fillable = ['salary_grades','baisc_grades','overtime_rate'];
}
