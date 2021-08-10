<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('customer_id');
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->bigInteger('phone');
            $table->timestamp('date_last_active')->nullable();
            $table->timestamp('date_registered')->nullable();
            $table->string('country');
            $table->string('postcode');
            $table->string('city');
            $table->string('state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
