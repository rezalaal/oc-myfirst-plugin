<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteRezalaalTbCities extends Migration
{
    public function up()
    {
        Schema::dropIfExists('rezalaal_tb_cities');
    }
    
    public function down()
    {
        Schema::create('rezalaal_tb_cities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('code', 5);
            $table->string('name', 100);
            $table->primary(['code']);
        });
    }
}
