<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezalaalTbMonthlyPerformances2 extends Migration
{
    public function up()
    {
        Schema::table('rezalaal_tb_monthly_performances', function($table)
        {
            $table->integer('months_id');
        });
    }
    
    public function down()
    {
        Schema::table('rezalaal_tb_monthly_performances', function($table)
        {
            $table->dropColumn('months_id');
        });
    }
}
