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
            'name' => 'abc',
            'email' => 'abc12@gmail.com',
            'password' => md5('abc5678'),
            'gender' => 'female',
            'bg' => 'A+',
            'phone' => '01711113333'
        ]);
    }
}
