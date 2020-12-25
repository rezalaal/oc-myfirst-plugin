<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezalaalTbWcc extends Migration
{
    public function up()
    {
        Schema::table('rezalaal_tb_wcc', function($table)
        {
            $table->dropPrimary(['weekly_contract_id','course_id']);
            $table->integer('weekly_contracts_id');
            $table->integer('courses_id');
            $table->dropColumn('weekly_contract_id');
            $table->dropColumn('course_id');
            $table->primary(['weekly_contracts_id','courses_id']);
        });
    }
    
    public function down()
    {
        Schema::table('rezalaal_tb_wcc', function($table)
        {
            $table->dropPrimary(['weekly_contracts_id','courses_id']);
            $table->dropColumn('weekly_contracts_id');
            $table->dropColumn('courses_id');
            $table->integer('weekly_contract_id');
            $table->integer('course_id');
            $table->primary(['weekly_contract_id','course_id']);
        });
    }
}
