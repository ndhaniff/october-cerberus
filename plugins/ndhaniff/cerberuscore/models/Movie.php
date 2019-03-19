<?php namespace Ndhaniff\CerberusCore\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ndhaniff_cerberuscore_movie';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
