<?php namespace Iamk\Banner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIamkBannerBullets extends Migration
{
    public function up()
    {
        Schema::create('iamk_banner_bullets', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('text');
            $table->text('adv_icon_1');
            $table->string('adv_title_1');
            $table->text('adv_text_1');
            $table->text('adv_icon_2');
            $table->string('adv_title_2');
            $table->text('adv_text_2');
            $table->text('adv_icon_3');
            $table->string('adv_title_3');
            $table->text('adv_text_3');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamk_banner_bullets');
    }
}
