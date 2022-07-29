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
            'client_name' => 'Rafi',
            'client_email' => 'rafi122@gmail.com',
            'client_password' => md5('12345679'),
            'client_dob' => 'Male',
            'client_gender' => '12-06-1997',
            'client_bg' => 'O+',
            'client_phone' => '01133257623',
            'client_address' => '126, Badda',
        ]);
        
    }
}
