<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    public function subjects()
    {
        return $this->hasMany(Subject::class);

    }

    public function class()
    {
        return $this->belongsTo(CourseClass::class,'course_class_id');
    }


    public function teacher()
    {
        return $this->belongsTo(User::class,'teacher_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class,'course_id');
    }

    public function category()
    {
        return $this->belongsTo(CourseClass::class,'course_class_id');
    }
}
