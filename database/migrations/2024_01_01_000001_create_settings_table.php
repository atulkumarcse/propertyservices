<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', config('app.name', 'Near Me Property'));
        $this->migrator->add('general.site_email', 'info@nearme.com');
        $this->migrator->add('general.site_phone', '+91 859 594 3726');
        $this->migrator->add('general.site_address', 'Wonder City 1, Meerut, IN');
        $this->migrator->add('general.site_country', 'India');
        $this->migrator->add('general.site_currency', '₹');
        $this->migrator->add('general.site_default_language', 'en');
        $this->migrator->add('general.facebook_url', null);
        $this->migrator->add('general.twitter_url', null);
        $this->migrator->add('general.github_url', 'https://www.github.com/nearme');
        $this->migrator->add('general.youtube_url', null);
        $this->migrator->add('general.footer_copyright', '© ' . date('Y') . ' ' . config('app.name', 'Near Me Property') . '. All rights reserved.');
    }
};