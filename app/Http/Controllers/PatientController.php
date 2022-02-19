<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PatientController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $patients = User::where('type', 'Paciente')->get();

        return view('patients.index', compact('user', 'patients'));
    }

    public function destroy($id)

    {
        $patient = User::find($id);
        $patient->delete();
        return redirect('/patients/index');
    }
}