<?php

namespace Database\Seeders;
use App\Models\Laden;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LadenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Laden::factory(10)->create();
    }
    
}