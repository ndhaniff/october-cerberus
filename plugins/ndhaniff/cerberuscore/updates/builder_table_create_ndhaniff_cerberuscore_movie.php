<?php namespace Ndhaniff\CerberusCore\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNdhaniffCerberuscoreMovie extends Migration
{
    public function up()
    {
        Schema::create('ndhaniff_cerberuscore_movie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ndhaniff_cerberuscore_movie');
    }
}
