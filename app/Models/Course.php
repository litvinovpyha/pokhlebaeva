<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // testing and seeding db with fake data. 
    use HasFactory;
    public function contents()
    {
        return $this->hasMany(Lesson::class)->orderBy('position');
    }
    protected $fillable = ['name', 'price', 'image'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
