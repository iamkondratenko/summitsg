<?php namespace Iamk\Services\Models;

use Model;

/**
 * Model
 */
class Services extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'iamk_services_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
