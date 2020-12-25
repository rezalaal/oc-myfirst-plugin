<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezalaalTbMonthlyPerformances3 extends Migration
{
    public function up()
    {
        Schema::table('rezalaal_tb_monthly_performances', function($table)
        {
            $table->integer('years_id');
        });
    }
    
    public function down()
    {
        Schema::table('rezalaal_tb_monthly_performances', function($table)
        {
            $table->dropColumn('years_id');
        });
    }
}
