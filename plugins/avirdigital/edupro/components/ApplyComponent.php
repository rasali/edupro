<?php namespace Avirdigital\Edupro\Components;

use Avirdigital\Edupro\Models\Apply;
use Avirdigital\Edupro\Models\ApplyPosition;
use Cms\Classes\ComponentBase;
use Validator;
use ValidationException;

class ApplyComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Apply',
            'description' => 'Apply component page'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['position'] = $this->listPosition();
    }

    protected function listPosition()
    {
        $model = new ApplyPosition();

        return $model->where('is_active', 1)->get();

    }

    public function onApply()
    {

        $validateData = post();


        $rules = [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'position' => 'required',
        ];

        $validation = Validator::make($validateData, $rules);

        if ($validation->fails()) {
            throw new ValidationException($validation);

        } else {
            $apply = Apply::create($validateData);

            $a = Mail::send('avirdigital.edupro::mail.message', $validateData, function ($message) {

                $message->to('rasul.aliyev94@gmail.com', 'Admin Person');
                $message->subject('You have a new message');

            });
            dd($a);

        }
    }
}
