<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezalaalTbStRatios5 extends Migration
{
    public function up()
    {
        Schema::table('rezalaal_tb_st_ratios', function($table)
        {
            $table->decimal('contract_per_week_toi', 5, 2)->after('contract_per_week');
            $table->renameColumn('contract_per_week', 'contract_per_week_emp');
        });
    }
    
    public function down()
    {
        Schema::table('rezalaal_tb_st_ratios', function($table)
        {
            $table->dropColumn('contract_per_week_toi');
            $table->renameColumn('contract_per_week_emp', 'contract_per_week');
        });
    }
}
