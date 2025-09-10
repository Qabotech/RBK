<?php

namespace Database\Seeders;
use App\Models\Bilder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BilderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Bilder::factory(10)->create();
    }
    
    
}