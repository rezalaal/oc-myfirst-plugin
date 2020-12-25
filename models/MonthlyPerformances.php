<?php namespace Rezalaal\Tb\Models;

use Model;

/**
 * Model
 */
class MonthlyPerformances extends Model
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
    public $table = 'rezalaal_tb_monthly_performances';

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
        'courses' => [
            'Rezalaal\TB\Models\Courses',
            'order' => 'name'
        ],
        'emptypes' => [
            'Rezalaal\TB\Models\EmpTypes',
            'order' => 'type'
        ],
        'months' => [
            'Rezalaal\TB\Models\Months',
            'order' => 'number_of_months'
        ],
        'years' => [
            'Rezalaal\TB\Models\Years',
            'order' => 'name'
        ]
    ];
}
