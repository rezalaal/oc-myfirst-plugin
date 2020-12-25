<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbMpcor extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_mpcor', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('monthly_performance_id');
            $table->integer('cource_id');
            $table->primary(['monthly_performance_id','cource_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_mpcor');
    }
}
