<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Project::create([
            'title' => 'Dự án Website Bán Hàng',
            'description' => 'Xây dựng bằng Laravel và Bootstrap 5',
            'image' => 'project1.jpg',
            'link' => 'https://github.com/your-profile'
        ]);
        // Thêm vài dự án nữa tùy ý bạn...
    }
}
