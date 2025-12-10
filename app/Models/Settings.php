<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'site_name',
        'logo_path',
        'favicon_path',
        'footer_text',
        'contact_email',
        'social_links',
    ];

    protected $casts = [
        'social_links' => 'array',
    ];
}
