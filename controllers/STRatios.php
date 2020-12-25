<?php namespace Rezalaal\Tb\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use \Rezalaal\TB\Models\Cities;
class STRatios extends Controller
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
        'rezalaal.tb.tb_st_ratios' 
    ];
    public $rules = [
        'contract_ratio'     => 'required|numeric',
        'available_ration'   => 'required|numeric',
        'courses_id'         => 'required|numeric',
        'genders_id'         => 'required|numeric',
        'cities_id'          => 'required|numeric',
        'years_id'           => 'required|numeric'
    ];
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Rezalaal.Tb', 'tb', 'st_ratio');
    }

    public function test(){
        $config = $this->makeConfig('$/rezalaal/tb/models/stratios/columns.yaml');

        $config->model = new \Rezalaal\TB\Models\STRatios;
        //$config->recordUrl = 'rezalaal/tb/stratios/update/:id';
        $widget = $this->makeWidget('Backend\Widgets\Lists', $config);
        //$widget->bindToController();
        $this->vars['widget'] = $widget;
        $this->vars['config_model'] = $config->model;
    }

    public function test2(){


        $this->vars['cities'] = Cities::all();
    }
}
