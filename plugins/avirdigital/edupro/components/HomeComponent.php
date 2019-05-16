<?php namespace Avirdigital\Edupro\Components;

use Avirdigital\Edupro\Models\Course;
use Avirdigital\Edupro\Models\Partner;
use Cms\Classes\ComponentBase;

class HomeComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'HomeComponent',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['courses'] = $this->listCourse();
        $this->page['partners'] = $this->listPartner();

    }

    protected function listCourse()
    {
        $model = new Course();

        return $model->where('is_active', 1)->get();

    }

    protected function listPartner()
    {
        $model = new Partner();

        return $model->where('is_active', 1)->get();

    }
}
