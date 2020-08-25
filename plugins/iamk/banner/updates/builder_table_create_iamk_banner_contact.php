<?php namespace Iamk\Banner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIamkBannerContact extends Migration
{
    public function up()
    {
        Schema::create('iamk_banner_contact', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('text');
            $table->text('map');
            $table->text('bullets');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamk_banner_contact');
    }
}
