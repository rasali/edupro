<?php namespace Avirdigital\Edupro\Components;

use Avirdigital\Edupro\Models\About;
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
//        dd($this->page['about']);
    }

    protected function listAbout()
    {
        $model = new About();

        return $model->where('is_active', 1)->get();

    }
}
