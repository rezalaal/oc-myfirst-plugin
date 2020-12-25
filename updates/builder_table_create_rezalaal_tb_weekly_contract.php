<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbWeeklyContract extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_weekly_contract', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('cities_id');
            $table->integer('courses_id');
            $table->integer('free_hours');
            $table->integer('emp_hours');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_weekly_contract');
    }
}
