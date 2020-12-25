<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezalaalTbMonths extends Migration
{
    public function up()
    {
        Schema::table('rezalaal_tb_months', function($table)
        {
            $table->integer('number_of_weeks');
        });
    }
    
    public function down()
    {
        Schema::table('rezalaal_tb_months', function($table)
        {
            $table->dropColumn('number_of_weeks');
        });
    }
}
