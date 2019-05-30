<?php namespace Avirdigital\Edupro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalEduproCourses5 extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_edupro_courses', function($table)
        {
            $table->text('about')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_edupro_courses', function($table)
        {
            $table->dropColumn('about');
        });
    }
}
