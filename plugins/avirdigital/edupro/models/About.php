<?php namespace Avirdigital\Edupro\Models;

use Model;

/**
 * Model
 */
class About extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'avirdigital_edupro_abouts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
