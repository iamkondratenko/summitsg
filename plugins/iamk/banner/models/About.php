<?php namespace Iamk\Banner\Models;

use Model;

/**
 * Model
 */
class About extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'iamk_banner_about';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
