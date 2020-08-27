<?php namespace Iamk\ServicesPayment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIamkServicespaymentData2 extends Migration
{
    public function up()
    {
        Schema::table('iamk_servicespayment_data', function($table)
        {
            $table->text('payment_term')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('iamk_servicespayment_data', function($table)
        {
            $table->string('payment_term')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
