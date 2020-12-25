<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteRezalaalTbMpcor extends Migration
{
    public function up()
    {
        Schema::dropIfExists('rezalaal_tb_mpcor');
    }
    
    public function down()
    {
        Schema::create('rezalaal_tb_mpcor', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('monthly_performance_id');
            $table->integer('cource_id');
            $table->primary(['monthly_performance_id','cource_id']);
        });
    }
}
