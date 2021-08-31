<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lecture;

class ClassRoom extends Model
{
    use HasFactory;

    protected $fillable = ['room_name'];

    public function lecture()
    {
        return $this->hasMany(Lecture::class);
    }
}
