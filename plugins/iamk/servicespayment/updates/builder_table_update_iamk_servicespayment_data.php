<?php namespace Iamk\ServicesPayment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIamkServicespaymentData extends Migration
{
    public function up()
    {
        Schema::rename('iamk_servicespayment_', 'iamk_servicespayment_data');
    }
    
    public function down()
    {
        Schema::rename('iamk_servicespayment_data', 'iamk_servicespayment_');
    }
}
