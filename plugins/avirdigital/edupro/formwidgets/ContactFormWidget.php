<?php namespace Avirdigital\Edupro\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * ContactFormWidget Form Widget
 */
class ContactFormWidget extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = '_avirdigital\edupro_contact_form_widget';

    /**
     * @inheritDoc
     */
    public function init()
    {
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('contactformwidget');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    /**
     * @inheritDoc
     */
    public function loadAssets()
    {
        $this->addCss('css/contactformwidget.css', '.Avirdigital\Edupro');
        $this->addJs('js/contactformwidget.js', '.Avirdigital\Edupro');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}
