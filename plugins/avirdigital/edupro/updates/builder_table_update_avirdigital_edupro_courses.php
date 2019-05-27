<?php namespace Avirdigital\Edupro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalEduproCourses extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_edupro_courses', function($table)
        {
            $table->string('hours')->nullable();
            $table->string('afternoon')->nullable();
            $table->string('evening')->nullable();
            $table->string('weekend')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_edupro_courses', function($table)
        {
            $table->dropColumn('hours');
            $table->dropColumn('afternoon');
            $table->dropColumn('evening');
            $table->dropColumn('weekend');
        });
    }
}
