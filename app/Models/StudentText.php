<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentText extends Model
{
    use HasFactory;
    
    protected $fillable = ['id', 'number_line','number_word', 'paragraph', 'time'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function title()
    {
        return $this->hasMany(TextTitle::class);
    }

    public function tematicAxis()
    {
        return $this->hasMany(TematicAxis::class);
    }

    public function vestibular()
    {
        return $this->hasMany(Vestibular::class);
    }
}
