<?php namespace Rezalaal\Tb\Models;

use Model;

/**
 * Model
 */
class Signatures extends Model
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
    public $table = 'rezalaal_tb_signatures';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
