<?php namespace Rezalaal\Tb\Components;

use Cms\Classes\ComponentBase;
use \Rezalaal\TB\Models\Cities;
use \Rezalaal\TB\Models\Years;
use \Rezalaal\TB\Models\Months;
use Rezalaal\Tb\Models\STRatios;
use Rezalaal\Tb\Models\WeeklyContract;
use Rezalaal\Tb\Models\MonthlyPerformances;
use Rezalaal\Tb\Models\Signatures;
use Rezalaal\Tb\Models\EmpTypes;

class EmpTeachFeeReport extends ComponentBase
{
    
    public $city;
    public $month;
    public $year;
    public $ratios;
    public $tableItms;
    public $signatures;
    public $comment;
    public $emptypeId;
    public $emptypeName;

    public function componentDetails()
    {
        return [
            'name'        => 'rezalaal.tb::lang.components.empteachfeereport.name',
            'description' => 'rezalaal.tb::lang.components.empteachfeereport.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $cityId     = $this->param('city_id');
        $yearId     = $this->param('year_id');
        $monthId    = $this->param('month_id');
        $emptypeId  = $this->param('emptype');
         
        $this->city       = $this->getCity($cityId); 
        $this->month      = $this->getMonth($monthId);        
        $this->year       = $this->getYear($yearId);        
        $this->ratios     = $this->getRatios($cityId,$yearId);
        $this->tableItms  = $this->makeTable2($cityId,$yearId,$monthId,$emptypeId); 
        $this->emptypeName = $this->getEmpTypeName($emptypeId);
        $this->signatures = $this->getSignatures();
        $this->comment    = $this->param('comment');
         
         
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

    public function getRatios($cityId,$yearId){
        $stratios = $this->getSTRaios($cityId,$yearId);
        $ratios = [];
        foreach($stratios as $stratio){
            array_push($ratios, (object)[
                'year' => $stratio->years->name,
                'city' => $stratio->cities->name,
                'contract_ratio' => $stratio->contract_ratio,
                'available_ration' => $stratio->available_ration,
                'course' => $stratio->courses->name,
                'gender' => $stratio->genders->name
        ]);
        }

        return $ratios;
    }

    public function getCities(){
        return Cities::orderBy('name')->get();
    }

    public function getCity($cityId){
        return Cities::where('id','=',$cityId)->first()->name;
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
         
        $mps =  MonthlyPerformances::where('cities_id','=',$cityId)->where('years_id','=',$yearId)->where('months_id','=',$monthId)->where('courses_id','=',$courseId)->where('emptypes_id','=',$emptypesId)->first();

         if($mps !== null){
            return $mps->hours;
        }else{
            return 0;
        }
    }

    public function getEmpTypeName($emptypeId){
        if ($emptypeId !=0){
            return EmpTypes::where('id','=',$emptypeId)->first()->type;
        }else{
            return  trans('rezalaal.tb::lang.report.empteach.freeandemp');
        }
        
    }

    public function getSignatures(){
        return Signatures::all();
    }

}
