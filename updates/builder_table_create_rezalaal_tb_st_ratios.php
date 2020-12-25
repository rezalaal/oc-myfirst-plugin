<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbStRatios extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_st_ratios', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->decimal('contract_ratio', 20, 2);
            $table->decimal('available_ration', 20, 2);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_st_ratios');
    }
}
