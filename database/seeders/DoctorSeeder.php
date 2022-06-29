<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\doctor::factory()->create([
<<<<<<< HEAD
            'doctor_name' => 'rahat',
            'doctor_email' => 'rahat@gmail.com',
            'doctor_password' => md5('abc5678'),
            'doctor_gender' => 'female',
            'doctor_bg' => 'A+',
            'doctor_phone' => '01711113333'
=======
            'name' => 'abc',
            'email' => 'ahad59@gmail.com',
            'password' => md5('abc5678'),
            'gender' => 'female',
            'bg' => 'A+',
            'phone' => '01711113333'
>>>>>>> 1aa7a1951476e1bf868283ca50d7f0e01a78f1ea
        ]);
    }
}
