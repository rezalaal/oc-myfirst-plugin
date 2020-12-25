<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbMonths extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_months', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 25);
            $table->integer('number_of_months');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_months');
    }
}
