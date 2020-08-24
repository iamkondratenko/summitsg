<?php namespace Iamk\Banner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIamkBannerSlider extends Migration
{
    public function up()
    {
        Schema::table('iamk_banner_slider', function($table)
        {
            $table->string('picture')->default('null');
        });
    }
    
    public function down()
    {
        Schema::table('iamk_banner_slider', function($table)
        {
            $table->dropColumn('picture');
        });
    }
}
