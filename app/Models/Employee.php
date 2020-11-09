<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
     /**
     * Get the user that owns the employee.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
