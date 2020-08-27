<?php namespace Iamk\ServicesPayment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIamkServicespayment extends Migration
{
    public function up()
    {
        Schema::create('iamk_servicespayment_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('payment_document_id');
            $table->string('payment_fio');
            $table->string('payment_phone');
            $table->string('payment_address');
            $table->string('payment_term');
            $table->integer('payment_sum');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamk_servicespayment_');
    }
}
