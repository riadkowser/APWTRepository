<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Client::factory()->create([
            'name' => 'Rahat',
<<<<<<< HEAD
            'email' => 'rahat122@gmail.com',
=======
            'email' => 'rahat100@gmail.com',
>>>>>>> 1aa7a1951476e1bf868283ca50d7f0e01a78f1ea
            'password' => md5('12345678'),
            'gender' => 'Male',
            'dob' => '12-06-1997',
            'blood_group' => 'O+',
            'phone' => '01122257623',
            'address' => '126, Gulshan',
        ]);
        
    }
}
