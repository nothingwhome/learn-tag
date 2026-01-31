<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'file_path', 'file_type', 
        'category', 'difficulty_level', 'created_by', 'is_active'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function userProgress()
    {
        return $this->hasMany(UserProgress::class);
    }
}