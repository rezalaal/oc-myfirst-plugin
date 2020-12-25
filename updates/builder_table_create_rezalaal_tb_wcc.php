<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbWcc extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_wcc', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('weekly_contract_id');
            $table->integer('course_id');
            $table->primary(['weekly_contract_id','course_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_wcc');
    }
}
