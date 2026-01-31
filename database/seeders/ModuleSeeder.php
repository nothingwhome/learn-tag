<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    public function run()
    {
        $modules = [
            [
                'title' => 'Pengenalan Dasar Programming',
                'description' => 'Modul ini membahas konsep dasar programming dan algoritma.',
                'file_path' => 'modules/sample_programming.pdf',
                'file_type' => 'pdf',
                'category' => 'Programming',
                'difficulty_level' => 'easy',
                'created_by' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'HTML & CSS Fundamental',
                'description' => 'Belajar dasar-dasar HTML dan CSS untuk membuat website.',
                'file_path' => 'modules/html_css_basics.pdf',
                'file_type' => 'pdf',
                'category' => 'Web Development',
                'difficulty_level' => 'easy',
                'created_by' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'JavaScript Advanced',
                'description' => 'Menguasai JavaScript untuk pengembangan web interaktif.',
                'file_path' => 'modules/advanced_javascript.pdf',
                'file_type' => 'pdf',
                'category' => 'Web Development',
                'difficulty_level' => 'medium',
                'created_by' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Database Management System',
                'description' => 'Pemahaman tentang sistem manajemen database dan SQL.',
                'file_path' => 'modules/database_management.pdf',
                'file_type' => 'pdf',
                'category' => 'Database',
                'difficulty_level' => 'medium',
                'created_by' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Cybersecurity Basics',
                'description' => 'Pengenalan konsep keamanan siber dan praktik terbaik.',
                'file_path' => 'modules/cybersecurity_intro.pdf',
                'file_type' => 'pdf',
                'category' => 'Security',
                'difficulty_level' => 'hard',
                'created_by' => 1,
                'is_active' => true,
            ],
        ];

        foreach ($modules as $module) {
            Module::create($module);
        }
    }
}