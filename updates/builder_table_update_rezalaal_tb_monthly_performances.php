<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezalaalTbMonthlyPerformances extends Migration
{
    public function up()
    {
        Schema::table('rezalaal_tb_monthly_performances', function($table)
        {
            $table->integer('cities_id');
            $table->integer('courses_id');
            $table->integer('emptypes_id');
        });
    }
    
    public function down()
    {
        Schema::table('rezalaal_tb_monthly_performances', function($table)
        {
            $table->dropColumn('cities_id');
            $table->dropColumn('courses_id');
            $table->dropColumn('emptypes_id');
        });
    }
}
