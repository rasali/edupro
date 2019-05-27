<?php namespace Avirdigital\Edupro\Components;

use Avirdigital\Edupro\Models\Course;
use Cms\Classes\ComponentBase;

class CourseComponent extends ComponentBase
{

    public $courses_id;
    public $slug;

    public function componentDetails()
    {
        return [
            'name'        => 'Course',
            'description' => 'Course page component'
        ];
    }

    public function prepareVars()
    {
        $this->slug = $this->param('slug');

    }

    public function onRun()
    {

        $this->prepareVars();
        $this->page['course'] = $this->listCourse();
//        $this->page['other_courses'] = $this->otherCourse();

    }

    public function listCourse()
    {
        $model = Course::where('slug', $this->slug)->first();
        $this->courses_id = $model->id;
        return $model;
    }

//    protected function otherBlogs()
//    {
//        $model = Course::where('is_active', 1)->where('id', '<>', $this->blogs_id )->orderBy('sort_order', 'DESC')->get();
//        return $model;
//    }

    public function defineProperties()
    {
        return [];
    }


}
