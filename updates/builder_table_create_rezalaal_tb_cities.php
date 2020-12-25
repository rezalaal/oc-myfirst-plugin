<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbCities extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_cities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('code', 5);
            $table->string('name', 100);
            $table->primary(['code']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_cities');
    }
}
