<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbSignatures extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_signatures', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 100);
            $table->string('post_title', 200);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_signatures');
    }
}
