<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbEmptypes extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_emptypes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('type', 50);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_emptypes');
    }
}
