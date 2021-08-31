<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Lecture;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['group_name'];

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function lecture()
    {
        return $this->hasMany(Lecture::class);
    }
}
