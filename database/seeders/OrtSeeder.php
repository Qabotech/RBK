<?php

namespace Database\Seeders;
use App\Models\Ort;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Ort::factory(10)->create();
    }
    
}