<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function user()  // Define the relationship between the Employer and User models
    {
        return $this->belongsTo(User::class);
    }

    public function jobs()  // Define the relationship between the Employer and Job models 
    {
        return $this->hasMany(Job::class);
    }
    
}