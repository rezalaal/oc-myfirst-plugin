<?php namespace Rezalaal\Tb\Updates;
 
use October\Rain\Database\Updates\Seeder;
use Rezalaal\Tb\Models\Cities;
use Rezalaal\Tb\Models\Courses;
use Rezalaal\Tb\Models\EmpTypes;
use Rezalaal\Tb\Models\Genders;
use Rezalaal\Tb\Models\Months;
use Rezalaal\Tb\Models\Years;

class SeedAllTables extends Seeder
{

    public function run()
    {
        Cities::create([
            'name' => 'اداره کل آموزش و پرورش خراسان شمالی',
            'code' => '2100'
        ]);
        Cities::create([
            'name' => 'بجنورد',
            'code' => '2101'
        ]);
        Cities::create([
            'name' => 'شیروان',
            'code' => '2161'
        ]);
        Cities::create([
            'name' => 'اسفراین',
            'code' => '2118'
        ]);
        Cities::create([
            'name' => 'فاروج',
            'code' => '2187'
        ]);
        Cities::create([
            'name' => 'مانه و سملقان',
            'code' => '2126'
        ]);
        Cities::create([
            'name' => 'جاجرم',
            'code' => '2122'
        ]);
        Cities::create([
            'name' => 'راز و جرگلان',
            'code' => '2124'
        ]);
        Cities::create([
            'name' => 'گرمه',
            'code' => '2123'
        ]);
        Cities::create([
            'name' => 'بام و صفی آباد',
            'code' => '2128'
        ]);
        Courses::create([
            'name' => 'ابتدایی'
        ]);
        Courses::create([
            'name' => 'متوسطه اول'
        ]);
        Courses::create([
            'name' => 'متوسطه نظری'
        ]);
        Courses::create([
            'name' => 'فنی و حرفه ای'
        ]);
        Courses::create([
            'name' => 'کاردانش'
        ]);
        Courses::create([
            'name' => 'پرورشی'
        ]);
        Courses::create([
            'name' => 'استثنایی'
        ]);
        EmpTypes::create([
            'type' => 'حق التدریس آزاد'
        ]);
        EmpTypes::create([
            'type' => 'حق التدریس شاغل'
        ]);
        Genders::create([
            'name' => '-'
        ]);
        Genders::create([
            'name' => 'زن'
        ]);
        Genders::create([
            'name' => 'مرد'
        ]);
        Months::create([
            'name'              => 'فروردین',
            'number_of_months'  => '1',
            'number_of_weeks'   => '2.86'
        ]);
        Months::create([
            'name'              => 'اردیبهشت',
            'number_of_months'  => '2',
            'number_of_weeks'   => '3.86'
        ]);
        Months::create([
            'name'              => 'خرداد',
            'number_of_months'  => '3',
            'number_of_weeks'   => '3'
        ]);
        Months::create([
            'name'              => 'تیر',
            'number_of_months'  => '4',
            'number_of_weeks'   => '3.86'
        ]);
        Months::create([
            'name'              => 'مرداد',
            'number_of_months'  => '5',
            'number_of_weeks'   => '3.57'
        ]);
        Months::create([
            'name'              => 'شهریور',
            'number_of_months'  => '6',
            'number_of_weeks'   => '3.57'
        ]);
        Months::create([
            'name'              => 'مهر',
            'number_of_months'  => '7',
            'number_of_weeks'   => '3.43'
        ]);
        Months::create([
            'name'              => 'آبان',
            'number_of_months'  => '8',
            'number_of_weeks'   => '3.29'
        ]);
        Months::create([
            'name'              => 'آذر',
            'number_of_months'  => '9',
            'number_of_weeks'   => '3.71'
        ]);
        Months::create([
            'name'              => 'دی',
            'number_of_months'  => '10',
            'number_of_weeks'   => '3.57'
        ]);
        Months::create([
            'name'              => 'بهمن',
            'number_of_months'  => '11',
            'number_of_weeks'   => '3.57'
        ]);
        Months::create([
            'name'              => 'اسفند',
            'number_of_months'  => '12',
            'number_of_weeks'   => '3.14'
        ]);
        Years::create([
            'name' => '1398-1399'
        ]);
        Years::create([
            'name' => '1399-1400'
        ]);
    }
}
