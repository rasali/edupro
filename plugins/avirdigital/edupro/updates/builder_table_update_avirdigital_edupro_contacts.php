<?php namespace Avirdigital\Edupro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalEduproContacts extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_edupro_contacts', function($table)
        {
            $table->renameColumn('message', 'content');
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_edupro_contacts', function($table)
        {
            $table->renameColumn('content', 'message');
        });
    }
}
