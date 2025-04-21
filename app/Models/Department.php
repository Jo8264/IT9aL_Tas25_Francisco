<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function location() {
        return $this->belongsTo(Location::class, 'location_id');
    }
    
    public function employees() {
        return $this->hasMany(Employee::class, 'department_id');
    }
    
}
