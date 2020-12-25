<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezalaalTbStRatios3 extends Migration
{
    public function up()
    {
        Schema::table('rezalaal_tb_st_ratios', function($table)
        {
            $table->integer('cities_id');
        });
    }
    
    public function down()
    {
        Schema::table('rezalaal_tb_st_ratios', function($table)
        {
            $table->dropColumn('cities_id');
        });
    }
}
