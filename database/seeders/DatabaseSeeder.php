<?php

namespace Database\Seeders;

use App\Models\member;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        {
            member::create([
                'p_name' => 'Chun Damn',
                'p_class' => '3p',
                'p_mark' => '80',
            ]);
    
            member::create([
                'p_name' => 'Alex',
                'p_class' => '4R',
                'p_mark' => '89',
            ]);
    
            member::create([
                'p_name' => 'Den',
                'p_class' => '3p',
                'p_mark' => '90',
            ]);
        }
        
    }
}
