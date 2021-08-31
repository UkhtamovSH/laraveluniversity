<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Lecture;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['lesson_type'];

    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }

    public function lecture()
    {
        return $this->hasMany(Lecture::class);
    }
}
