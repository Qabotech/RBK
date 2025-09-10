<?php

namespace Database\Seeders;
use App\Models\Besitzer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BesitzerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Besitzer::factory(10)->create();
    }
}