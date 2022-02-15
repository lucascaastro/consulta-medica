<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\DoctorsSpecialist;
use App\Models\Specialist;

class DoctorController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $specialists = DoctorsSpecialist::join('specialists', 'specialists.id', 'doctors_specialists.specialist_id')
            ->where('specialists.id', '=', 'doctors_specialists.specialist_id')->get();
        // ::join('users', 'users.id', 'doctors_specialists.doctor_id')
        // ::where('specialists.id', '==', 'doctors_specialists.specialist_id')
        // ::where('users.id', '==', 'doctors_specialists.doctor_id')->get();
        $doctors = User::where('type', 'Médico')->get();

        return view('doctors.index', compact('user', 'doctors', 'specialists'));
    }
}