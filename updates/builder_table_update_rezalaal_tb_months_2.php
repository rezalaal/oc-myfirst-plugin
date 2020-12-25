<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezalaalTbMonths2 extends Migration
{
    public function up()
    {
        Schema::table('rezalaal_tb_months', function($table)
        {
            $table->decimal('number_of_weeks', 5, 2)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rezalaal_tb_months', function($table)
        {
            $table->integer('number_of_weeks')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
