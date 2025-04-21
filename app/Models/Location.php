<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    }
    
    public function departments() {
        return $this->hasMany(Department::class, 'location_id');
    }
    
}
