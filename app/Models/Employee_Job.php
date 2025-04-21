<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee_Job extends Model
{
    public function employees()
    {
        return $this->hasMany(Employee::class, 'job_id');
    }
    
}
