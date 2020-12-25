<?php namespace Rezalaal\Tb\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class WeeklyContract extends Controller
{
    public $implement = [        
        'Backend\Behaviors\ListController',        
        'Backend\Behaviors\FormController',
        'Backend.Behaviors.RelationController'    
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'rezalaal.tb.tb_weekly_hours' 
    ];
    public $rules = [
        'free_hours'    => 'required|numeric',
        'emp_hours'     => 'required|numeric',
        'courses_id'    => 'required|numeric',
        
        'cities_id'     => 'required|numeric',
        'years_id'      => 'required|numeric'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Rezalaal.Tb', 'tb', 'weekly_hours');
    }
}
