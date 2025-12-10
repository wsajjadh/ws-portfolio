<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            // Tech Stack
            ['name' => 'PHP', 'type' => 'Tech Stack', 'active' => true],
            ['name' => 'Laravel', 'type' => 'Tech Stack', 'active' => true],
            ['name' => 'Filament', 'type' => 'Tech Stack', 'active' => true],
            ['name' => 'Node.js', 'type' => 'Tech Stack', 'active' => true],
            ['name' => 'React', 'type' => 'Tech Stack', 'active' => true],
            ['name' => 'Next.js', 'type' => 'Tech Stack', 'active' => true],
            ['name' => 'MySQL', 'type' => 'Tech Stack', 'active' => true],
            ['name' => 'PostgreSQL', 'type' => 'Tech Stack', 'active' => true],

            // Automation Tools
            ['name' => 'Make.com', 'type' => 'Automation Tools', 'active' => true],
            ['name' => 'Zapier', 'type' => 'Automation Tools', 'active' => true],
            ['name' => 'n8n', 'type' => 'Automation Tools', 'active' => true],
            ['name' => 'API Integration', 'type' => 'Automation Tools', 'active' => true],
            ['name' => 'Webhook Automation', 'type' => 'Automation Tools', 'active' => true],

            // Platforms
            ['name' => 'WordPress', 'type' => 'Platforms', 'active' => true],
            ['name' => 'WooCommerce', 'type' => 'Platforms', 'active' => true],
            ['name' => 'Shopify', 'type' => 'Platforms', 'active' => true],

            // Project Nature
            ['name' => 'Internal Tool', 'type' => 'Project Nature', 'active' => true],
            ['name' => 'Dashboard', 'type' => 'Project Nature', 'active' => true],
            ['name' => 'Reporting', 'type' => 'Project Nature', 'active' => true],
            ['name' => 'Web Scraping', 'type' => 'Project Nature', 'active' => true],
            ['name' => 'SaaS', 'type' => 'Project Nature', 'active' => true],
            ['name' => 'MVP', 'type' => 'Project Nature', 'active' => true],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
