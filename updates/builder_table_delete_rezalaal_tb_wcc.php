<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteRezalaalTbWcc extends Migration
{
    public function up()
    {
        Schema::dropIfExists('rezalaal_tb_wcc');
    }
    
    public function down()
    {
        Schema::create('rezalaal_tb_wcc', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('weekly_contracts_id');
            $table->integer('courses_id');
            $table->primary(['weekly_contracts_id','courses_id']);
        });
    }
}
