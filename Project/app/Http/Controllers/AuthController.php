<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $appointments = null;
        $doctors = null;
        if (auth()->check()) {
            $userId = auth()->id();
            $appointments = Appointment::where('user_id', $userId)->get();
            if(auth()->role="admin"){
                $doctors = User::where('role', 'doctor')->get();
            }
        }

        return view("welcome", ['appointments' => $appointments, 'doctors'=>$doctors]);
    }

    public function login(){
        return view("auth.login");
    }


    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['email' => 'Błędne dane'])->withInput($request->only('email'));
    }
}
