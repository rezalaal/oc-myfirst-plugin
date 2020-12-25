<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbCities2 extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_cities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('code', 5);
            $table->string('name', 100);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_cities');
    }
}
