<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'id';
<<<<<<< HEAD
    protected $fillable = ['name','email', 'address', 'mobile'];
=======
    protected $fillable = ['name','designation','date_of_birth','gender','religion','email', 'address', 'mobile','joining_date','upload_file','username','password'];
>>>>>>> 961abd5 (shahab)
}
