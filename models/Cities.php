<?php namespace Rezalaal\Tb\Models;

use Model;

/**
 * Model
 */
class Cities extends Model
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
    public $table = 'rezalaal_tb_cities';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
