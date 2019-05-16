<?php namespace Avirdigital\Edupro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAvirdigitalEduproAbouts extends Migration
{
    public function up()
    {
        Schema::create('avirdigital_edupro_abouts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('sec_email')->nullable();
            $table->string('address')->nullable();
            $table->text('description')->nullable();
            $table->integer('sort_ordeer')->nullable()->unsigned();
            $table->boolean('is_active')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('avirdigital_edupro_abouts');
    }
}
