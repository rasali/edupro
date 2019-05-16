<?php namespace Avirdigital\Edupro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAvirdigitalEduproStudents extends Migration
{
    public function up()
    {
        Schema::create('avirdigital_edupro_students', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('position')->nullable();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->boolean('is_active')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('avirdigital_edupro_students');
    }
}
