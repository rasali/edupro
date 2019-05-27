<?php namespace Avirdigital\Edupro\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * ApplyFormWidget Form Widget
 */
class ApplyFormWidget extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = '_avirdigital\edupro_apply_form_widget';

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
        return $this->makePartial('applyformwidget');
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
        $this->addCss('css/applyformwidget.css', '.Avirdigital\Edupro');
        $this->addJs('js/applyformwidget.js', '.Avirdigital\Edupro');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}
