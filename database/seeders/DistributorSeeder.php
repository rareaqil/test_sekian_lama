<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Distributor;

class DistributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Distributor::create([
            'nama_distributor' => 'Distributor 1',
            'city' => 'City 1',
            'region' => 'Region 1',
            'country' => 'Country 1',
            'phone' => '123456789',
            'email' => 'distributor1@example.com'        ]);

        Distributor::create([
            'nama_distributor' => 'Distributor 2',
            'city' => 'City 2',
            'region' => 'Region 2',
            'country' => 'Country 2',
            'phone' => '987654321',
            'email' => 'distributor2@example.com'
        ]);
    }
}
