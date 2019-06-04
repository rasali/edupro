<?php namespace Avirdigital\Edupro\Components;

use Avirdigital\Edupro\Models\About;
use Avirdigital\Edupro\Models\Career;
use Avirdigital\Edupro\Models\Course;
use Avirdigital\Edupro\Models\Partner;
use Avirdigital\Edupro\Models\Social;
use Avirdigital\Edupro\Models\Student;
use Cms\Classes\ComponentBase;

class HomeComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Home',
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
//        $this->page['coursesfooter'] = $this->listCourseFooter();
        $this->page['partners'] = $this->listPartner();
        $this->page['careers'] = $this->listCareer();
        $this->page['students'] = $this->listStudent();
        $this->page['social'] = $this->listSocial();

    }

    protected function listCourse()
    {
        $model = new Course();

        return $model->where('is_active', 1)->get();


    }

//    protected function listCourseFooter()
//    {
//        $model = new Course();
//
//        return $model->where('is_active', 1)->orderBy('sort_order','DESC')->take(4)->get();
//
//
//    }

    protected function listPartner()
    {
        $model = new Partner();

        return $model->where('is_active', 1)->get();

    }

    protected function listCareer()
    {
        $model = new Career();

        return $model->where('is_active', 1)->orderBy('sort_order', 'ASC')->get();

    }

    protected function listStudent()
    {
        $model = new Student();

        return $model->where('is_active', 1)->orderBy('sort_order', 'DESC')->get();

    }



    protected function listSocial()
    {
        $model = new Social();

        return $model->where('is_active', 1)->get();

    }
}
