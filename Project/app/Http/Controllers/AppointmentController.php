<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    function create(){
        $treatments = Treatment::all();
        $doctors = User::all();
        return view("appointment.create", ['treatments'=>$treatments, 'doctors'=>$doctors]);
    }

    public function update(Appointment $appointment){
        $appointment->status = "confirmed";
        $appointment->update();
        return redirect("/");
    }
    public function destroy(Appointment $appointment){
        $appointment->delete();
        return redirect("/");
    }
    public function store(Request $request)
    {
        Appointment::create($request->only('patient_name', 'patient_surname', 'patient_email', 'date', 'user_id', 'treatment_id'));
        return redirect('/');
    }

}
