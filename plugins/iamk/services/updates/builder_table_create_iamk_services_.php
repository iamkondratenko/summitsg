<?php namespace Iamk\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIamkServices extends Migration
{
    public function up()
    {
        Schema::create('iamk_services_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('text');
            $table->text('picture');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamk_services_');
    }
}
