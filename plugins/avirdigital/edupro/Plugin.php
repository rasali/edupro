<?php namespace Avirdigital\Edupro;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Avirdigital\Edupro\Components\CourseComponent' => 'Course',
            'Avirdigital\Edupro\Components\PartnerComponent' => 'Partner',
            'Avirdigital\Jobustan\Components\HomeComponent' => 'Home',
            'Avirdigital\Jobustan\Components\StudentComponent' => 'Student',
        ];
    }

    public function registerSettings()
    {
    }
}
