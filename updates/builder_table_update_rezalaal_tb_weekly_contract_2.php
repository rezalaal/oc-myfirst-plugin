<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezalaalTbWeeklyContract2 extends Migration
{
    public function up()
    {
        Schema::table('rezalaal_tb_weekly_contract', function($table)
        {
            $table->integer('emptypes_id');
            $table->integer('hours');
            $table->dropColumn('free_hours');
            $table->dropColumn('emp_hours');
        });
    }
    
    public function down()
    {
        Schema::table('rezalaal_tb_weekly_contract', function($table)
        {
            $table->dropColumn('emptypes_id');
            $table->dropColumn('hours');
            $table->integer('free_hours');
            $table->integer('emp_hours');
        });
    }
}
