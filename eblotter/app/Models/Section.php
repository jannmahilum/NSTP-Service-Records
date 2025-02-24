<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['name', 'description', 'employee_id'];

    // Define the relationship to Grade
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
