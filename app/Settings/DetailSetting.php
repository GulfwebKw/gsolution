<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class DetailSetting extends Settings
{

    public $email;
    public $phone;
    public $careerDescription;
    public $logo;
    public $breadcrumbBackground;
    public ?array $branches;
    public ?array $location;
    public ?array $socials;
    public static function group(): string
    {
        return 'g';
    }
}
