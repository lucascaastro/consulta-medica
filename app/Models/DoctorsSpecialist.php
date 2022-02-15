<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorsSpecialist extends Model
{
    use HasFactory;

    protected $fillable = [
        'specialist_id',
        'doctor_id'
    ];

    public function specialists()
    {
        return $this->belongsTo(Specialist::class, 'specialist_id');
    }
}