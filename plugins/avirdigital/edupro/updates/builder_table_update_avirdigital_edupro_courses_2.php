<?php namespace Avirdigital\Edupro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalEduproCourses2 extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_edupro_courses', function($table)
        {
            $table->text('why_this_course')->nullable();
            $table->text('who_can_append')->nullable();
            $table->text('the_purpose')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_edupro_courses', function($table)
        {
            $table->dropColumn('why_this_course');
            $table->dropColumn('who_can_append');
            $table->dropColumn('the_purpose');
        });
    }
}
