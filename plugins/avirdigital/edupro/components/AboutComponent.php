<?php namespace Avirdigital\Edupro\Components;

use Cms\Classes\ComponentBase;

class AboutComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'About',
            'description' => 'About page component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['about'] = $this->listAbout();
    }

    protected function listAbout()
    {
        $model = new About();

        return $model->where('is_active', 1)->get();

    }
}
