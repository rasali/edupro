<?php namespace Avirdigital\Edupro\Components;

use Cms\Classes\ComponentBase;

class CourseComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Course',
            'description' => 'Course page component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
