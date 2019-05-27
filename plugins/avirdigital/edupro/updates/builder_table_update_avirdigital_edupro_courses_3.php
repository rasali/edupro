<?php namespace Avirdigital\Edupro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalEduproCourses3 extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_edupro_courses', function($table)
        {
            $table->renameColumn('who_can_append', 'who_can_apply');
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_edupro_courses', function($table)
        {
            $table->renameColumn('who_can_apply', 'who_can_append');
        });
    }
}
