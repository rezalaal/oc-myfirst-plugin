<?php namespace Rezalaal\Tb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezalaalTbCourses extends Migration
{
    public function up()
    {
        Schema::create('rezalaal_tb_courses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 50);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezalaal_tb_courses');
    }
}
