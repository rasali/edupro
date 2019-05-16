<?php namespace Avirdigital\Edupro;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Avirdigital\Edupro\Components\CourseComponent' => 'Course',
            'Avirdigital\Edupro\Components\PartnerComponent' => 'Partner',
            'Avirdigital\Edupro\Components\HomeComponent' => 'Home',
            'Avirdigital\Edupro\Components\StudentComponent' => 'Student',
            'Avirdigital\Edupro\Components\AboutComponent' => 'About',
        ];
    }

    public function registerSettings()
    {
    }
}
