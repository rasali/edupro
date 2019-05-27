<?php namespace Avirdigital\Edupro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalEduproApplyPositions2 extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_edupro_apply_positions', function($table)
        {
            $table->boolean('is_active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_edupro_apply_positions', function($table)
        {
            $table->dropColumn('is_active');
        });
    }
}
