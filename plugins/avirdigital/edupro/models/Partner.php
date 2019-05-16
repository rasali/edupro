<?php namespace Avirdigital\Edupro\Models;

use Model;

/**
 * Model
 */
class Partner extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'avirdigital_edupro_partners';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'logo' => 'System\Models\File',
    ];
}
