<?php namespace Rezalaal\Tb\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use \Rezalaal\TB\Models\Cities;
use \Rezalaal\TB\Models\Years;
use \Rezalaal\TB\Models\Months;
use Rezalaal\Tb\Models\STRatios;
use Rezalaal\Tb\Models\WeeklyContract;
use Rezalaal\Tb\Models\MonthlyPerformances;
use Rezalaal\Tb\Models\EmpTypes;

class Dashboard extends Controller
{
    public $implement = [        
           
           
    ];
    
    public $requiredPermissions = [
        'rezalaal.tb.tb_top_menu' ,
        'rezalaal.tb.tb_empteachfeereport',
        'rezalaal.tb.tb_dashboard'
    ];

    

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Rezalaal.Tb', 'tb');
    }

    public function index()
    {   
     
    }

    public function onGetSTRatios(){

        return [
            'popup' => $this->renderPartial('@result.htm')
        ];
    }
    public function EmpTeachFeeReport(){
        $this->pageTitle        = "rezalaal.tb::lang.plugin.name";
        $this->vars['cities']   = $this->getCities();
        $this->vars['years']    = $this->getYears();
        $this->vars['months']   = $this->getMonths();
        $this->vars['emptypes'] = $this->getEmpTypes(); 
         
    }

    public function onGetEmpTeachFeeReport(){

        
        $city       = input('city');
        $year       = input('year');
        $month      = input('month');
        $emptype    = input('emptype'); 
        $comment    = input('comment');
        if(empty($comment)){$comment="-";}
        $this->vars['cityId']   = $city;
        $this->vars['monthId']  = $month;         
        $this->vars['yearId']   = $year;
        $this->vars['comment']  = $comment;
        $this->vars['emptype']  = $emptype;
        $this->vars['city']     = $this->getCity($city);
        $this->vars['month']    = $this->getMonth($month);
        $this->vars['year']     = $this->getYear($year);
        $this->vars['emptypeName'] = $this->getEmpTypeName($emptype);
        // Table 1        
        $this->vars['stratios'] = $this->getSTRaios($city,$year);        
        // Table 2                
        $this->vars['tableItms'] = $this->makeTable2($city,$year,$month,$emptype);
        
        
    }

    
    public function makeTable2($cityId,$yearId,$monthId,$emptypeId){
        //Table 2 Free TeachFee Hours
        $weeklycontracts = $this->getWeeklyContracts($cityId,$yearId,$emptypeId);
        $tableItems = [];
        
        foreach($weeklycontracts AS $weeklycontract){
            array_push($tableItems, (object)[
                'course'            => $weeklycontract->courses->name,
                'hours'             => $weeklycontract->hours,
                'number_of_weeks'   => $this->getNumberOfWeeks($monthId),
                'hours_per_month'   => $this->getHoursPerMonth($cityId,$yearId,$monthId,$weeklycontract->courses_id,$emptypeId),
                'hours_per_week'    => round(($this->getHoursPerMonth($cityId,$yearId,$monthId,$weeklycontract->courses_id,$emptypeId)/$this->getNumberOfWeeks($monthId)),0),
                'dispute'           => round(($this->getHoursPerMonth($cityId,$yearId,$monthId,$weeklycontract->courses_id,$emptypeId)/$this->getNumberOfWeeks($monthId)),0)-$weeklycontract->hours,
                'emptype'           => $this->getEmpTypeName($emptypeId)
            ]);                                               
        }
        return $tableItems;
    }
    
    public function getCities(){
        return Cities::orderBy('name')->get();
    }

    public function getCity($cityId){
        return Cities::where('id','=',$cityId)->first()->name;
    }

    public function getEmpTypes(){
        return EmpTypes::orderBy('type')->get();
    }

    public function getEmpTypeName($emptypeId){
        if ($emptypeId !=0){
            return EmpTypes::where('id','=',$emptypeId)->first()->type;
        }else{
            return  trans('rezalaal.tb::lang.report.empteach.freeandemp');
        }
        
    }

    public function getYears(){
        return Years::orderBy('name')->get();
    }

    public function getYear($yearId){
        return Years::where('id','=',$yearId)->first()->name;
    }

    public function getMonths(){
        return Months::orderBy('name')->get();
    }

    public function getMonth($monthId){
        return Months::where('id','=',$monthId)->first()->name;
    }

    public function getNumberOfWeeks($monthId){
        return Months::where('id','=',$monthId)->first()->number_of_weeks;
    }

    public function getSTRaios($cityId,$yearId){
        return STRatios::where('cities_id','=',$cityId)->where('years_id','=',$yearId)->get();
    }

    public function getWeeklyContracts($cityId,$yearId,$emptypeId){
        return WeeklyContract::where('cities_id','=',$cityId)->where('years_id','=',$yearId)->where('emptypes_id','=',$emptypeId)->get();                
    }

    public function getHoursPerMonth($cityId,$yearId,$monthId,$courseId,$emptypesId){
        if($emptypesId !=0){
            $mps =  MonthlyPerformances::where('cities_id','=',$cityId)->where('years_id','=',$yearId)->where('months_id','=',$monthId)->where('courses_id','=',$courseId)->where('emptypes_id','=',$emptypesId)->first();
            if($mps !== null){
                return $mps->hours;
            }else{
                return 0;
        }            
        }else{
            return 200;
        }
    }

    public function settings(){
        
    }


}
