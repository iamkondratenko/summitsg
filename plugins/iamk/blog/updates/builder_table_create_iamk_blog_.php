<?php namespace Iamk\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIamkBlog extends Migration
{
    public function up()
    {
        Schema::create('iamk_blog_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('slug');
            $table->text('text');
            $table->text('picture');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamk_blog_');
    }
}
