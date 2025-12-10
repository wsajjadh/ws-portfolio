<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Web Applications', 'description' => 'Full-stack web applications and platforms', 'active' => true],
            ['name' => 'Mobile Applications', 'description' => 'iOS and Android mobile apps', 'active' => true],
            ['name' => 'API & Backend Services', 'description' => 'RESTful APIs and backend microservices', 'active' => true],
            ['name' => 'Automation & Integrations', 'description' => 'Workflow automation and system integrations', 'active' => true],
            ['name' => 'E-commerce', 'description' => 'E-commerce platforms and solutions', 'active' => true],
            ['name' => 'Websites & CMS', 'description' => 'Static and dynamic websites with CMS', 'active' => true],
            ['name' => 'Web Scraping', 'description' => 'Data extraction and web scraping projects', 'active' => true],
            ['name' => 'Internal Tools', 'description' => 'Internal dashboards and tools', 'active' => true],
            ['name' => 'Landing Pages', 'description' => 'Marketing and promotional landing pages', 'active' => true],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
