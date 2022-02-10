<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedSpecialist extends Model
{
    use HasFactory;

    protected $fillable = [
        'specialty',
        'user_id'
    ];
}