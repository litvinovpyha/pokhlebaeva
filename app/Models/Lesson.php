<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['title','course_id'];

    public function contents(){
        return $this->hasMany(LessonContent::class)->orderBy('position');
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
