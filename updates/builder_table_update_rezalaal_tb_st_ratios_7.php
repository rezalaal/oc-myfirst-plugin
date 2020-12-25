<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezalaalTbStRatios7 extends Migration
{
    public function up()
    {
        Schema::table('rezalaal_tb_st_ratios', function($table)
        {
            $table->dropColumn('contract_per_week_emp');
            $table->dropColumn('contract_per_week_toi');
        });
    }
    
    public function down()
    {
        Schema::table('rezalaal_tb_st_ratios', function($table)
        {
            $table->decimal('contract_per_week_emp', 5, 1);
            $table->decimal('contract_per_week_toi', 5, 2);
        });
    }
}
