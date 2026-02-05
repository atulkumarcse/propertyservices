<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Settings\GeneralSettings;

class SiteSettingsSeeder extends Seeder
{
    public function run()
    {
        $settings = app(GeneralSettings::class);

        $settings->site_name = config('app.name', 'Near Me Property');
        $settings->site_email = 'info@nearme.com';
        $settings->site_phone = '+91 859 594 3726';
        $settings->site_address = 'Wonder City 1, Meerut, IN';
        $settings->site_country = 'India';
        $settings->site_currency = '₹';
        $settings->site_default_language = 'en';
        $settings->facebook_url = 'https://www.facebook.com/nearme';
        $settings->twitter_url = null;
        $settings->github_url = 'https://www.github.com/nearme';
        $settings->youtube_url = null;
        $settings->footer_copyright = '© ' . date('Y') . ' ' . config('app.name', 'Near Me Property') . '. All rights reserved.';

        $settings->save();
    }
}
