<?php namespace Avirdigital\Edupro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalEduproAbouts extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_edupro_abouts', function($table)
        {
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_edupro_abouts', function($table)
        {
            $table->dropColumn('content');
        });
    }
}
