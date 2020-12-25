<?php namespace Rezalaal\Tb\Models;

use Model;

/**
 * Model
 */
class STRatios extends Model
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
    public $table = 'rezalaal_tb_st_ratios';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'cities' => [
            'Rezalaal\TB\Models\Cities',
            'order' => 'name'
        ],
        'genders' => [
            'Rezalaal\TB\Models\Genders',
            'order' => 'name'
        ],
        'courses' => [
            'Rezalaal\TB\Models\Courses',
            'order' => 'name'
        ],                
        'years' => [
            'Rezalaal\TB\Models\Years',
            'order' => 'name desc'
        ]
    ];

}
