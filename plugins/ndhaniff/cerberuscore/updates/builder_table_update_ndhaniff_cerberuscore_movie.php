<?php namespace Ndhaniff\CerberusCore\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNdhaniffCerberuscoreMovie extends Migration
{
    public function up()
    {
        Schema::table('ndhaniff_cerberuscore_movie', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('ndhaniff_cerberuscore_movie', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
        });
    }
}
