<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbMpe extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_mpe', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('monthly_performance_id');
            $table->integer('emptype_id');
            $table->primary(['monthly_performance_id','emptype_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_mpe');
    }
}
