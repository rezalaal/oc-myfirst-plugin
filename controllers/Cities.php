<?php namespace Rezalaal\Tb\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Cities extends Controller
{
    public $implement = [        
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController'       
           
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';


    public $requiredPermissions = [
        'rezalaal.tb.tb_cities' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Rezalaal.Tb', 'tb');
    }

    
}
