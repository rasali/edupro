<?php namespace Avirdigital\Edupro\Components;

use Cms\Classes\ComponentBase;

class PartnerComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Partner',
            'description' => 'Partner page component'
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

        return $model->where('is_active', 1)->where('is_home', 1)->get();

    }


}
