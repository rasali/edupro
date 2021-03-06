<?php namespace Avirdigital\Edupro\Models;

use Model;

/**
 * Model
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $guarded =[];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'avirdigital_edupro_contacts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
