<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'patient_id',
        'specialist_id',
        'user_id',
        'date',
        'hour'
    ];

    public function doctors()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
    public function patients()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
}