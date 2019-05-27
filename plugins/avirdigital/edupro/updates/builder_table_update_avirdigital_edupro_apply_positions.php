<?php namespace Avirdigital\Edupro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalEduproApplyPositions extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_edupro_apply_positions', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('apply_id')->nullable()->unsigned();
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_edupro_apply_positions', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->dropColumn('apply_id');
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
        });
    }
}
