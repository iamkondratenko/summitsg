<?php namespace Iamk\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteIamkBlogssg extends Migration
{
    public function up()
    {
        Schema::dropIfExists('iamk_blogssg_');
    }
    
    public function down()
    {
        Schema::create('iamk_blogssg_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title', 255);
            $table->text('description');
            $table->text('text');
            $table->text('picture');
        });
    }
}
