<?php namespace Avirdigital\Edupro\Components;

use Cms\Classes\ComponentBase;

class StudentComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Student',
            'description' => 'Student page component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
