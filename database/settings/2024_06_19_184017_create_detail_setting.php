<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('g.email', 'info@gsolutions.com');
        $this->migrator->add('g.phone', '+965 2265 0262');
        $this->migrator->add('g.careerDescription', 'Join our team, we\'re always looking for new talent. We are looking for people who love web development, technology and everything this industry has to offer. Below you can see our open positions, however don\'t let anything stop you from getting in touch if you don\'t see what you like!');
        $this->migrator->add('g.logo', null);
        $this->migrator->add('g.breadcrumbBackground', null);
        $this->migrator->add('g.socials', []);
        $this->migrator->add('g.branches', []);
        $this->migrator->add('g.location',  ['lat' =>  29.33 , 'lng' =>  47.99]);
    }
};
