<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbMpc extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_mpc', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('monthly_performance_id');
            $table->integer('cities_id');
            $table->primary(['monthly_performance_id','cities_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_mpc');
    }
}
