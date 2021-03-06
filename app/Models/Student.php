<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function class()
    {
        return $this->belongsTo(StudentClass::class);
    }

    public function feeses()
    {
        return $this->hasMany(StudentFee::class);
    }
}
