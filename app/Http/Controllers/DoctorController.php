<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\DoctorsSpecialist;
use App\Models\Specialist;

class DoctorController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $consults = Consult::all();
        $doctors = User::where('type', 'Médico')->get();

        return view('doctors.index', compact('user', 'doctors', 'consults'));
    }

    public function destroy($id)

    {
        $doctor = User::find($id);
        $doctor->delete();
        return redirect('/doctors/index');
    }
}