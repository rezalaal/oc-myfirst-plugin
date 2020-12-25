<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezalaalTbStRatios2 extends Migration
{
    public function up()
    {
        Schema::table('rezalaal_tb_st_ratios', function($table)
        {
            $table->integer('months_id');
            $table->integer('courses_id');
            $table->integer('genders_id');
        });
    }
    
    public function down()
    {
        Schema::table('rezalaal_tb_st_ratios', function($table)
        {
            $table->dropColumn('months_id');
            $table->dropColumn('courses_id');
            $table->dropColumn('genders_id');
        });
    }
}
