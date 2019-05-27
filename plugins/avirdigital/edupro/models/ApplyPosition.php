<?php namespace Avirdigital\Edupro\Models;

use Model;

/**
 * Model
 */
class ApplyPosition extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'avirdigital_edupro_apply_positions';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
