<?php namespace Avirdigital\Edupro\Components;

use Avirdigital\Edupro\Models\Contact;
use Cms\Classes\ComponentBase;
use Mail;
use Validator;
use ValidationException;

class ContactComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact',
            'description' => 'Contact component page'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {

    }

    public function onSendMessage()
    {

        $validateData = post();


        $rules = [
            'full_name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
        ];

        $validation = Validator::make($validateData, $rules);

        if ($validation->fails()) {
            throw new ValidationException($validation);

        } else {

            $contact = Contact::create($validateData);

            Mail::send('avirdigital.edupro::mail.message', $validateData, function ($message) {

                $message->to('rasul.aliyev94@gmail.com', 'Admin Person');
                $message->subject('You have a new message');

            });


        }


    }
}
