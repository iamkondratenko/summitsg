<?php namespace Iamk\Banner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIamkBannerAbout extends Migration
{
    public function up()
    {
        Schema::create('iamk_banner_about', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('text');
            $table->text('picture');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamk_banner_about');
    }
}
