<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lesson;
use App\Models\Lecture;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'lesson_id'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function lecture()
    {
        return $this->hasMany(Lecture::class);
    }
}
