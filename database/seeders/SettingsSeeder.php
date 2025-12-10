<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Settings::create([
            'site_name' => 'My Portfolio',
            'logo_path' => null,
            'favicon_path' => null,
            'footer_text' => '© ' . date('Y') . ' My Portfolio. All rights reserved.',
            'contact_email' => null,
            'social_links' => [],
        ]);
    }
}
