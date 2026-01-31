<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Module;
use App\Models\Quiz;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'username' => 'admin',
            'email' => 'admin@learning.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'is_active' => true,
        ]);

        // Create sample users
        User::factory()->count(10)->create();

        // Create sample modules
        $modules = Module::factory()->count(5)->create();

        // Create sample quizzes for each module
        foreach ($modules as $module) {
            Quiz::factory()->count(5)->create([
                'module_id' => $module->id,
                'created_by' => 1, // admin
            ]);
        }
    }
}