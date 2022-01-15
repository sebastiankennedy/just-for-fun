<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Semester extends Model
{
    use HasFactory, SoftDeletes;

    public function academicYear()
    {
        $this->belongsTo(AcademicYear::class);
    }

    public function school()
    {
        $this->belongsTo(School::class);
    }
}
