<?php namespace Iamk\Banner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIamkBannerSlider extends Migration
{
    public function up()
    {
        Schema::create('iamk_banner_slider', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('description');
            $table->string('button_text');
            $table->text('button_url');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamk_banner_slider');
    }
}
