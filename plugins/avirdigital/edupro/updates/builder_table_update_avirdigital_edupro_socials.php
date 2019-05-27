<?php namespace Avirdigital\Edupro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalEduproSocials extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_edupro_socials', function($table)
        {
            $table->text('link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_edupro_socials', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
