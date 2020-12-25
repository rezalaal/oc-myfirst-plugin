<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbMonthlyPerformances extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_monthly_performances', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('hours');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_monthly_performances');
    }
}
