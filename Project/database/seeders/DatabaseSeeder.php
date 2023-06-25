<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Treatment;
use App\Models\Appointment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Tworzenie dwóch lekarzy
        $doctor1 = User::create([
            'name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
            'phone_number' => '123456789',
            'role' => 'doctor',
        ]);

        $admin = User::create([
            'name' => 'Admin',
            'last_name' => 'Smith',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'phone_number' => '987654321',
            'role' => 'admin',
        ]);

        // Tworzenie dwóch zabiegów
        $treatment1 = Treatment::create([
            'name' => 'Wyrywanie zęba',
            'price' => 100.00,
        ]);

        $treatment2 = Treatment::create([
            'name' => 'Wyrywanie innego zęba',
            'price' => 150.00,
        ]);

        // Tworzenie dwóch wizyt, jedna dla każdego lekarza
        $appointment1 = Appointment::create([
            'date' => '2023-06-20',
            'status' => 'confirmed',
            'user_id' => $doctor1->id,
            'patient_name'=> 'Pavel',
            'patient_surname'=> 'Stano',
            'patient_email'=> 'stano@gmail.com',
            'treatment_id' => $treatment2->id,
        ]);

        $appointment2 = Appointment::create([
            'date' => '2023-06-21',
            'status' => 'pending',
            'patient_name'=> 'Pavel',
            'patient_surname'=> 'Doe',
            'patient_email'=> 'doe12@gmail.com',
            'user_id' => $admin->id,
            'treatment_id' => $treatment1->id,
        ]);
    }
}
