<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezalaalTbWeeklyContract extends Migration
{
    public function up()
    {
        Schema::table('rezalaal_tb_weekly_contract', function($table)
        {
            $table->integer('years_id')->after('courses_id');
        });
    }
    
    public function down()
    {
        Schema::table('rezalaal_tb_weekly_contract', function($table)
        {
            $table->dropColumn('years_id');
        });
    }
}
